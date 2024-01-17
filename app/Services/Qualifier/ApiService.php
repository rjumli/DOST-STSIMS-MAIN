<?php

namespace App\Services\Qualifier;

use App\Models\Qualifier;
use App\Models\QualifierProfile;
use App\Models\QualifierDeferment;
use App\Models\QualifierNotavail;

class ApiService
{
    public function fetch(){
        set_time_limit(0);
        $url = 'https://www.science-scholarships.ph/ug_portal_api_2023/dashboard.php?getqualifiers';
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $lists = json_decode($response);

        $users = array();
        $success = array();
        $failed = array();
        $duplicate = array();

        foreach($lists as $list){
            $spas_id = $list->spas_no;
            $program = $list->program;
    
            $firstname = $list->fname;
            $middlename = $list->mname;
            $lastname = $list->lname;
            $ext = $list->ext;
            $birthday = $list->bday;
            $sex = $list->sex;
    
            $contact_no = $list->cnum;
            $email = $list->email;
    
            $region = $list->region;
            $province = $list->prov;
            $municipality = $list->muni;
            $barangay = $list->brgy;
            $village = $list->village;
            $street = $list->street;
    
            $avail = $list->avail;
            $course = $list->crse;
            $school = $list->school_name;
            $school_region = $list->sreg;

            $education = [
                'school' => $school,
                'course' => $course,
            ];

            $addres = [
                'region' => $region,
                'province' => $province,
                'municipality' => $municipality,
                'barangay' => $barangay,
                'village' => $village,
                'street' => $street
            ];

            if (strpos($spas_id, "testaccount") !== false) {
                $test = 'yes';
            } else {
                $test = 'no';
            }
            return $test;
            
            if($test == 'yes'){
                $count = Qualifier::where('spas_id',$spas_id)->count();
                $qualified_year = '2023';

                $postData = array(
                    'spas_no' => $spas_id,
                    'region' => $region,
                );
        
                $url = 'https://www.science-scholarships.ph/ug_portal_api_2023/student.php?getQualifierInput';
                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postData,
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $res = json_decode($response);

                $defer = $res->defer;

                if($count == 0){
                    \DB::beginTransaction();
                    $scholar_data = [
                        'spas_id' => $spas_id,
                        'qualified_year' => $qualified_year,
                        'program_id' => $this->program($program),
                        'subprogram_id' => $this->program($program),
                        'status_id' => $this->status($avail,$defer),
                        'status_type' =>18,
                        'is_undergrad' => 1,
                        'is_completed' => 1,
                        'is_endorsed' => $this->is_endorsed($region,$school_region)
                    ];
                    
                    $qualifier = Qualifier::create($scholar_data);

                    if($qualifier){
                        if($res->defer == 1){
                            if($res){
                                if($res->deferreason){
                                    $deferreason = $res->deferreason;
                                }else{
                                    $deferreason = 'n/a';
                                }
                            }else{
                                $deferreason = 'n/a';
                            }
                            $d = [
                                'reason' => $deferreason,
                                'qualifier_id' => $qualifier->id,
                                'user_id' => \Auth::user()->id,
                                'created_at' => now(),
                                'updated_at' => now()
                            ];
                            QualifierDeferment::insertOrIgnore($d);
                        }
                        if($avail == 0){
                            if($res){
                                if($res->nonavailreason){
                                    $nonavailreason = $res->nonavailreason;
                                }else{
                                    $nonavailreason = 'n/a';
                                }
                            }else{
                                $nonavailreason = 'n/a';
                            }
                            $n = [
                                'reason' => $nonavailreason,
                                'qualifier_id' => $qualifier->id,
                                'user_id' => \Auth::user()->id,
                                'created_at' => now(),
                                'updated_at' => now()
                            ];
                            QualifierNotavail::insertOrIgnore($n);
                        }
                        if($region != $school_region){

                        }
                    }else{
                        array_push($failed,$spas_id);
                        \DB::rollback();
                    }

                    if($qualifier){
                        $profile_data = [
                            'email' => $email,
                            'firstname' => $firstname,
                            'middlename' => $middlename,
                            'lastname' => $lastname,
                            'suffix' => $ext,
                            'sex' => $sex,
                            'contact_no' => $contact_no,
                            'birthday' => $birthday,
                            'qualifier_id' => $qualifier->id
                        ];
                        $profile = QualifierProfile::create($profile_data);

                        if($profile){
                            array_push($success,$spas_id);
                            \DB::commit();
                        }else{
                            array_push($failed,$spas_id);
                            \DB::rollback();
                        }

                        $address_data = [
                            'region_code' => $this->region($region),
                            'province_code' => $this->province($province),
                            'municipality_code' => $this->municipality($municipality),
                            'barangay_code' => $this->barangay($municipality),
                            'qualifier_id' => $qualifier->id
                        ];

                        $address = QualifierAddress::create($address_data);
                    }else{
                        array_push($failed,$spas_id);
                        \DB::rollback();
                    }
                }else{
                    array_push($duplicate,$spas_id);
                }
            }
        }    
        $result = [
            'success' => $success,
            'failed' => $failed,
            'duplicate' => $duplicate,
        ];
        return $result;

        // if($avail){
        //     https://www.science-scholarships.ph/ug_portal_api_2023/student.php?getQualifierInput
        //     -spas_no
        //     -region
            
        //     if($defer){
        //         $deferreason = $defer->deferreason
        //     }

        //     if($school_region != $region){
        //         FOR ENDORSEMENT
        //     }
        // }else{
        //     https://www.science-scholarships.ph/ug_portal_api_2023/student.php?getQualifierInput
        //     $nonavailreason = $not->nonavailreason
        // }
    }

    public function is_endorsed($home,$school){
        return ($home != $school) ? true : false;
    }
    
    public function program($name){
        if($name == 'RA 7687'){
            return 1;
        }else if($name == 'MERIT'){
            return 3;
        }else if($name == 'JLSS'){
            return 26;
        }else{
            return 2;
        }
    }

    public function status($avail,$defer){
        if($avail == 0){
            return 16;
        }else if($avail == 1){
           if($defer == 1){
                return 15;
           }
           return 14;
        }else{
            return 14;
        }
    }

    public function region($region){
        $data = LocationRegion::where('subcode',$region)->value('region_code');
        if($data){
            return $data;
        }else{
            return null;
        }
    }
}

<?php

namespace App\Services\Qualifier;

use App\Models\Qualifier;
use App\Models\QualifierProfile;
use App\Models\QualifierDeferment;
use App\Models\QualifierNotavail;
use App\Models\QualifierAddress;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationBarangay;
use App\Models\LocationMunicipality;

class ApiService
{
    public function undergrad(){
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

            if (strpos($spas_id, "testaccount") !== false) {
                $test = 'no';
            } else {
                $test = 'yes';
            }
            
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
                        'school' => $school,
                        'course' => $course,
                        'region' => $this->region($region),
                        'qualified_year' => $qualified_year,
                        'program_id' => $this->program($program),
                        'subprogram_id' => $this->program($program),
                        'status_id' => $this->status($avail,$defer,$school_region,$region),
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
                        if($avail == 0 && $avail != null){
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
                            $address_data = $this->address(
                                $region,
                                $province,
                                $municipality,
                                $barangay,
                                $village,
                                $street,
                                $qualifier->id,
                            );
                            $address = QualifierAddress::create($address_data);
                            if($address){
                                array_push($success,$spas_id);
                                \DB::commit();
                            }else{
                                array_push($failed,$spas_id);
                                \DB::rollback();
                            }
                        }else{
                            array_push($failed,$spas_id);
                            \DB::rollback();
                        }

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
    }

    public function jlss(){
        set_time_limit(0);
        $url = 'https://www.science-scholarships.ph/jlss_portal_api_2023/dashboard.php?getqualifiers';
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
    
            // $avail = $list->avail;
            $course = $list->crse;
            $school = $list->school_name;
            $school_region = $list->sreg;

            if (strpos($spas_id, "testaccount") !== false) {
                $test = 'no';
            } else {
                $test = 'yes';
            }
            
            if($test == 'yes'){
                $count = Qualifier::where('spas_id',$spas_id)->count();
                $qualified_year = '2023';

                // $postData = array(
                //     'spas_no' => $spas_id,
                //     'region' => $region,
                // );
        
                // $url = 'https://www.science-scholarships.ph/jlss_portal_api_2023/student.php?getQualifierInput';
                // $curl = curl_init();
                // curl_setopt_array($curl, array(
                // CURLOPT_URL => $url,
                // CURLOPT_RETURNTRANSFER => true,
                // CURLOPT_ENCODING => '',
                // CURLOPT_MAXREDIRS => 10,
                // CURLOPT_TIMEOUT => 0,
                // CURLOPT_SSL_VERIFYHOST => false,
                // CURLOPT_SSL_VERIFYPEER => false,
                // CURLOPT_FOLLOWLOCATION => true,
                // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                // CURLOPT_CUSTOMREQUEST => 'POST',
                // CURLOPT_POSTFIELDS => $postData,
                // ));
                // $response = curl_exec($curl);
                // curl_close($curl);
                // $res = json_decode($response);

                // $defer = $res->defer; FOR UNDERGRADUATES ONLY

                if($count == 0){
                    \DB::beginTransaction();
                    $scholar_data = [
                        'spas_id' => $spas_id,
                        'school' => $school,
                        'course' => $course,
                        'region' => $this->region($school_region),
                        'qualified_year' => $qualified_year,
                        'program_id' => $this->program($program),
                        'subprogram_id' => $this->program($program),
                        // 'status_id' => $this->status($avail,$defer,$school_region,$region),
                        'status_id' => 14,
                        'status_type' =>18,
                        'is_undergrad' => 0,
                        'is_completed' => 1,
                        // 'is_endorsed' => $this->is_endorsed($region,$school_region)
                        'is_endorsed' => 0
                    ];
                    
                    $qualifier = Qualifier::create($scholar_data);

                    // if($qualifier){ FOR UNDERGRAD ONLY
                    //     if($res->defer == 1){
                    //         if($res){
                    //             if($res->deferreason){
                    //                 $deferreason = $res->deferreason;
                    //             }else{
                    //                 $deferreason = 'n/a';
                    //             }
                    //         }else{
                    //             $deferreason = 'n/a';
                    //         }
                    //         $d = [
                    //             'reason' => $deferreason,
                    //             'qualifier_id' => $qualifier->id,
                    //             'user_id' => \Auth::user()->id,
                    //             'created_at' => now(),
                    //             'updated_at' => now()
                    //         ];
                    //         QualifierDeferment::insertOrIgnore($d);
                    //     }
                    //     if($avail == 0 && $avail != null){
                    //         if($res){
                    //             if($res->nonavailreason){
                    //                 $nonavailreason = $res->nonavailreason;
                    //             }else{
                    //                 $nonavailreason = 'n/a';
                    //             }
                    //         }else{
                    //             $nonavailreason = 'n/a';
                    //         }
                    //         $n = [
                    //             'reason' => $nonavailreason,
                    //             'qualifier_id' => $qualifier->id,
                    //             'user_id' => \Auth::user()->id,
                    //             'created_at' => now(),
                    //             'updated_at' => now()
                    //         ];
                    //         QualifierNotavail::insertOrIgnore($n);
                    //     }
                    // }else{
                    //     array_push($failed,$spas_id);
                    //     \DB::rollback();
                    // }

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
                            $address_data = $this->address(
                                $region,
                                $province,
                                $municipality,
                                $barangay,
                                $village,
                                $street,
                                $qualifier->id,
                            );
                            $address = QualifierAddress::create($address_data);
                            if($address){
                                array_push($success,$spas_id);
                                \DB::commit();
                            }else{
                                array_push($failed,$spas_id);
                                \DB::rollback();
                            }
                        }else{
                            array_push($failed,$spas_id);
                            \DB::rollback();
                        }

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
    }

    public function is_endorsed($home,$school){
        if($school != null){
            return ($home != $school) ? true : false;
        }else{ 
            return false;
        }
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
        if($avail == null){
            return 14;
        }else if($avail == '0'){
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
        switch($region){
            case '1':
                $region_code = '010000000';
            break;
            case '2':
                $region_code = '020000000';
            break;
            case '3':
                $region_code = '030000000';
            break;
            case '4A':
                $region_code = '040000000';
            break;
            case '4B':
                $region_code = '170000000';
            break;
            case '5':
                $region_code = '050000000';
            break;
            case '6':
                $region_code = '060000000';
            break;
            case '7':
                $region_code = '070000000';
            break;
            case '8':
                $region_code = '080000000';
            break;
            case '9':
                $region_code = '090000000';
            break;
            case '10':
                $region_code = '100000000';
            break;
            case '11':
                $region_code = '110000000';
            break;
            case '12':
                $region_code = '120000000';
            break;
            case '13':
                $region_code = '130000000';
            break;
            case '14':
                $region_code = '140000000';
            break;
            case '15':
                $region_code = '150000000';
            break;  
            case '15':
                $region_code = '150000000';
            break; 
            case '16':
                $region_code = '160000000';
            break; 
        }
        return $region_code;
    }

    public function address($region,$province,$municipality,$barangay,$village,$street,$id){

        $province = rtrim($province);
        $municipality = rtrim($municipality);
        $barangay = rtrim($barangay);
        
        switch($region){
            case '1':
                $region_code = '010000000';
            break;
            case '2':
                $region_code = '020000000';
            break;
            case '3':
                $region_code = '030000000';
            break;
            case '4a':
                $region_code = '040000000';
            break;
            case '4b':
                $region_code = '170000000';
            break;
            case '5':
                $region_code = '050000000';
            break;
            case '6':
                $region_code = '060000000';
            break;
            case '7':
                $region_code = '070000000';
            break;
            case '8':
                $region_code = '080000000';
            break;
            case '9':
                $region_code = '090000000';
            break;
            case '10':
                $region_code = '100000000';
            break;
            case '11':
                $region_code = '110000000';
            break;
            case '12':
                $region_code = '120000000';
            break;
            case 'NCR':
                $region_code = '13000000';
            break;
            case 'CAR':
                $region_code = '140000000';
            break;
            case 'ARMM':
                $region_code = '150000000';
            break;  
            case 'BARMM':
                $region_code = '150000000';
            break; 
            case 'CARAGA':
                $region_code = '160000000';
            break; 
        }

        $information = [
            'address' => $village.', '.$street,
            'barangay' => $barangay,
            'municipality' => $municipality,
            'province' => $province,
            'region' => $region,
        ];

        $is_completed = 0;
        // ($municipality == 'ZAMBOANGA CITY') ? $province = 'ZAMBOANGA CITY' : $province;

        if($province){
            $data = LocationProvince::with('region')
            ->where(function($query) use ($province) {  
                $query->where('name','LIKE', '%'.$province.'%')->orWhere('old_name','LIKE', '%'.$province.'%');
            })->first();

            if($province){
                $province = $data->code;
                $region = $data->region->code;
            }else{
                $province = null;
            }
        }
        if($municipality != null){
            $m = LocationMunicipality::with('province')->where(function($query) use ($municipality) {  
                $query->where('name','LIKE', '%'.$municipality.'%')->orWhere('old_name','LIKE', '%'.$municipality.'%');
            })
            ->when($province, function ($query, $province) {
                $query->whereHas('province',function ($query) use ($province) {
                    $query->where('province_code',$province);
                });
            })
            ->first();
            
            if($m != null){
                $municipality = $m->code;
                ($province) ? $province : $m->province->code;
            }else{
                $municipality = strtolower($municipality);
                $test = strpos($municipality,'city');
                if($test){
                    $list = str_replace(" city",'',$municipality);
                    $municipality = 'City of '.$list;

                    $m = LocationMunicipality::with('province')->where(function($query) use ($municipality) {  
                        $query->where('name','LIKE', '%'.$municipality.'%');
                    })
                    ->when($province, function ($query, $province) {
                        $query->whereHas('province',function ($query) use ($province) {
                            $query->where('province_code',$province);
                        });
                    })
                    ->first();
    
                    if($m != null){
                        $municipality = $m->code;
                        ($province) ? $province :  $m->province->code;
                    }else{
                        $municipality = null;
                    }
                }else{
                    $municipality = null;
                }
            }
        }

        if($barangay != null){
            $barangay = str_replace("STO.","Santo",$barangay);
            $barangay = str_replace("STA.","Santa",$barangay);

            $b = LocationBarangay::where(function($query) use ($barangay) {  
                $query->where('name','LIKE', '%'.$barangay.'%');
            })
            ->when($municipality, function ($query, $municipality) {
                $query->whereHas('municipality',function ($query) use ($municipality) {
                    $query->where('municipality_code',$municipality);
                });
            })
            ->first();
            if($b != null){
                $barangay = $b->code;
            }else{
                $barangay = null;
            }
        }

        if($province != null && $municipality != null && $barangay != null){
            $is_completed = 1;
        }   

        $address = [
            'address' => $village.', '.$street,
            'barangay_code' => $barangay,
            'municipality_code' => $municipality,
            'province_code' => $province,
            'region_code' => $region,
            'is_completed' => $is_completed,
            'created_at' => now(),
            'updated_at' => now(),
            'information' => json_encode($information),
            'qualifier_id' => $id
        ];
        return $address;
    
    }
}

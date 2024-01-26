<?php

namespace App\Http\Controllers\Directory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SchoolService;
use App\Traits\HandlesTransaction;
use App\Http\Requests\SchoolRequest;
use App\Models\SchoolCampus;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;

class SchoolController extends Controller
{
    use HandlesTransaction;
    protected $schoolService;

    public function __construct(SchoolService $school)
    {
        $this->school = $school;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->school->lists($request);
            break;
            case 'counts':
                return $this->school->counts($request);
            break;
            default :
            return inertia('Modules/Directory/Schools/Index');
        }
    }

    public function store(SchoolRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->type){
                case 'school':
                    return $this->school->school($request);
                break;
                case 'campus':
                    return $this->school->campus($request);
                break;
                case 'course':
                    return $this->school->course($request);
                break;
            }
        });
        
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function show($data){
        $school = $this->school->show($data);
        $main = $this->school->main($data);
        return inertia('Modules/Directory/Schools/Profile/Index',[
            'school' => $school,
            'main' => $main
        ]);
    }

    public function api(){
        $data = $this->school->api();
        return $data;
    }

    public function insert(){

        $schools = [
            [
                "old_name"=> "AMA COMPUTER LEARNING CENTER (ACLC)",
                "code"=> 1100091,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "DAVAO",
                "barangay"=> "SAN FELIX BLDG., MCARTHUR HIGHWAY, MATINA",
                "municipality"=> "DAVAO CITY",
                "province"=> "DAVAO DEL SUR",
                "region"=> 11,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER (ACLC) OF NAGA CITY INC",
                "code"=> 500004,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "NAGA CITY",
                "barangay"=> "4/F NAGA LAND, E. ANGELES ST.",
                "municipality"=> "NAGA CITY",
                "province"=> "CAMARINES SUR",
                "region"=> 5,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER COLLEGE OF MARBEL",
                "code"=> 1200003,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "MARBEL",
                "barangay"=> "GENSAN DRIVE CONER, FRANCISCO ZULUETA ST,",
                "municipality"=> "KORONADAL CITY",
                "province"=> "SOUTH COTABATO",
                "region"=> 12,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER OF ANTIPOLO, INC.",
                "code"=> 4100009,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "ANTIPOLO",
                "barangay"=> "BARANGAY SAN ROQUE POB. ANTIPOLO CITY",
                "municipality"=> "ANTIPOLO CITY",
                "province"=> "RIZAL",
                "region"=> "4A",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-AKLAN",
                "code"=> 600007,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "AKLAN",
                "barangay"=> "Pastrana St",
                "municipality"=> "KALIBO",
                "province"=> "AKLAN",
                "region"=> 6,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-BAGUIO CITY",
                "code"=> 1500003,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "BAGUIO CITY",
                "barangay"=> "CAR",
                "municipality"=> "BAGUIO CITY",
                "province"=> "BENGUET",
                "region"=> "CAR",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-BALANGA",
                "code"=> 300002,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "BALANGA",
                "barangay"=> "49 DON MANUEL BANZON AVENUE,",
                "municipality"=> "BALANGA CITY",
                "province"=> "BATAAN",
                "region"=> 3,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 1
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-BUTUAN",
                "code"=> 1301023,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "BUTUAN",
                "barangay"=> "CARAGA",
                "municipality"=> "BUTUAN CITY",
                "province"=> "AGUSAN DEL NORTE",
                "region"=> "CARAGA",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-CALAMBA CITY",
                "code"=> 4100010,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "CALAMBA CITY",
                "barangay"=> "LAGUNA",
                "municipality"=> "CALAMBA CITY",
                "province"=> "LAGUNA",
                "region"=> "4A",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-DAET",
                "code"=> 500067,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "DAET",
                "barangay"=> "5",
                "municipality"=> "DAET",
                "province"=> "CAMARINES NORTE",
                "region"=> "5",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-ILOILO",
                "code"=> 600008,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "ILOILO",
                "barangay"=> "22 DELGADO ST",
                "municipality"=> "ILOILO CITY",
                "province"=> "ILOILO",
                "region"=> 6,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-LIPA CITY",
                "code"=> 4100014,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "LIPA CITY",
                "barangay"=> "CASA BUENA BLDG., P. BURGOS ST.A",
                "municipality"=> "LIPA CITY",
                "province"=> "BATANGAS",
                "region"=> "4A",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 1
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-LUCENA CITY",
                "code"=> 4100015,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "LUCENA CITY",
                "barangay"=> "4A",
                "municipality"=> "LUCENA CITY",
                "province"=> "QUEZON",
                "region"=> "4A",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-ROSARIO",
                "code"=> 4100016,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "ROSARIO",
                "barangay"=> "4A",
                "municipality"=> "ROSARIO",
                "province"=> "BATANGAS",
                "region"=> "4A",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-ROXAS CITY",
                "code"=> 600009,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "ROXAS CITY",
                "barangay"=> "6",
                "municipality"=> "ROXAS CITY",
                "province"=> "CAPIZ",
                "region"=> "6",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-SAN PABLO CITY",
                "code"=> 4100017,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "SAN PABLO CITY",
                "barangay"=> "JAMORA BUILDING",
                "municipality"=> "SAN PABLO CITY",
                "province"=> "LAGUNA",
                "region"=> "4A",
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ],
              [
                "old_name"=> "AMA COMPUTER LEARNING CENTER-TAGUM",
                "code"=> 1100004,
                "name"=> "AMA COMPUTER LEARNING CENTER",
                "campus"=> "TAGUM",
                "barangay"=> "CAP BLDG., PUROK NARRA, VISAYAN VILLAGE",
                "municipality"=> "TAGUM CITY",
                "province"=> "DAVAO DEL NORTE",
                "region"=> 11,
                "class"=> "PRIVATE",
                "term"=> "SEMESTER",
                "is_percentgrade"=> 0
              ]
        ];

        $school_id = 20;
        foreach($schools as $school){
            if($school['term'] == 'SEMESTER'){
                $term = 4;
            }else if($school['term'] == 'TRIMESTER'){
                $term = 5;
            }else{
                $term = 6;
            }

            if($school['is_percentgrade']){
                $grade = 8;
            }else{
                $grade = 9;
            }

            $region = $school['region'];
            $province = $school['province'];
            $municipality = $school['municipality'];

            $add = $this->address($province,$municipality);
            $province = $add['p'];
            $municipality = $add['m'];

            $data = new SchoolCampus;
            $data->code = $school['code'];
            $data->campus = $school['campus'];
            $data->address = $school['barangay'];
            $data->term_id = $term;
            $data->is_main = 0;
            $data->grading_id = $grade;
            $data->school_id = $school_id;
            $data->old_name = $school['old_name'];
            $data->province_code = $province;
            $data->municipality_code = $municipality;
            $data->region_code = $this->region($region);
            $data->assigned_region = $this->region($region);
            $data->save();
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
            case 'NCR':
                $region_code = '130000000';
            break;
            case 'CAR':
                $region_code = '140000000';
            break; 
            case 'BARMM':
                $region_code = '150000000';
            break; 
            case 'CARAGA':
                $region_code = '160000000';
            break; 
        }
        return $region_code;
    }

    public function address($province,$municipality){

        $province = rtrim($province);
        $municipality = rtrim($municipality);

        if($province){
            $data = LocationProvince::with('region')
            ->where(function($query) use ($province) {  
                $query->where('name','LIKE', '%'.$province.'%');
            })->first();

            if($data){
                $province = $data->code;
            }else{
                $province = null;
            }
        }
        if($municipality != null){
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

        $address = [
            'm' => $municipality,
            'p' => $province,
        ];
        return $address;
    
    }
}


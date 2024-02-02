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
                "code" => 901020,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "ALICIA",
                "barangay" => "POBLACION",
                "municipality" => "ALICIA",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-ALICIA"
            ],
            [
                "code" => 901021,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "AURORA",
                "barangay" => "JAPAN BLDG, ANHS, BALIDE",
                "municipality" => "AURORA",
                "province" => "ZAMBOANGA DEL SUR",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-AURORA"
            ],
            [
                "code" => 901022,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "CURUAN",
                "barangay" => "CURUAN",
                "municipality" => "ZAMBOANGA CITY",
                "province" => "ZAMBOANGA DEL SUR",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-CURUAN"
            ],
            [
                "code" => 901023,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "DIPLAHAN",
                "barangay" => "PUROK RIZAL, POBLACION",
                "municipality" => "DIPLAHAN",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-DIPLAHAN"
            ],
            [
                "code" => 901024,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "IMELDA",
                "barangay" => "BALUGO",
                "municipality" => "IMELDA",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-IMELDA"
            ],
            [
                "code" => 901025,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "IPIL",
                "barangay" => "IPIL HEIGHTS",
                "municipality" => "IPIL",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-IPIL"
            ],
            [
                "code" => 901026,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "MABUHAY",
                "barangay" => "SOLAR",
                "municipality" => "MABUHAY",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-MABUHAY"
            ],
            [
                "code" => 901027,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "MALANGAS",
                "barangay" => "POBLACION",
                "municipality" => "MALANGAS",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-MALANGAS"
            ],
            [
                "code" => 901028,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "MOLAVE",
                "barangay" => "MABINI ST., MALULOY-ON",
                "municipality" => "MOLAVE",
                "province" => "ZAMBOANGA DEL SUR",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-MOLAVE"
            ],
            [
                "code" => 901029,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "NAGA",
                "barangay" => "PUROK 11, STA.CLARA",
                "municipality" => "NAGA",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-NAGA"
            ],
            [
                "code" => 901030,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "OLUTANGA",
                "barangay" => "SOLAR",
                "municipality" => "OLUTANGA",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-OLUTANGA"
            ],
            [
                "code" => 901031,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "PAGADIAN",
                "barangay" => "STA. MARIA DISTRICT",
                "municipality" => "PAGADIAN CITY",
                "province" => "ZAMBOANGA DEL SUR",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-PAGADIAN"
            ],
            [
                "code" => 901032,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "SIAY",
                "barangay" => "DAKANAY",
                "municipality" => "SIAY",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-SIAY"
            ],
            [
                "code" => 901033,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "TUNGAWAN",
                "barangay" => "LIBERTAD",
                "municipality" => "TUNGAWAN",
                "province" => "ZAMBOANGA SIBUGAY",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-TUNGAWAN"
            ],
            [
                "code" => 901019,
                "name" => "WESTERN MINDANAO STATE UNIVERSITY",
                "campus" => "ZAMBOANGA CITY",
                "barangay" => "NORMAL ROAD, BALIWASAN",
                "municipality" => "ZAMBOANGA CITY",
                "province" => "ZAMBOANGA DEL SUR",
                "region" => 9,
                "class" => "SUC",
                "term" => "SEMESTER",
                "is_percentgrade" => 0,
                "old_name" => "WESTERN MINDANAO STATE UNIVERSITY-ZAMBOANGA CITY"
            ]
        ];

        $school_id = 137;
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


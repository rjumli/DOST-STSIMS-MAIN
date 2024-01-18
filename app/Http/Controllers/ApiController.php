<?php

namespace App\Http\Controllers;

use App\Models\ListAgency;
use App\Models\ListDropdown;
use App\Models\ListPrivilege;
use App\Models\ListProgram;
use App\Models\ListStatus;
use App\Models\ListCourse;
use App\Models\Scholar;
use App\Models\Qualifier;
use App\Models\School;
use App\Models\SchoolCampus;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use App\Http\Resources\Qualifier\IndexResource;

class ApiController extends Controller
{
    public function locations(Request $request,$type){
        if($type == 'count'){
            $array = [
                'Regions' => LocationRegion::count(),
                'Provinces' => LocationProvince::count(),
                'Municipalities' => LocationMunicipality::count(),
                'Barangays' => LocationBarangay::count()
            ];
            return $array;
        }else{
            switch($type){
                case 'regions' :
                    $data = LocationRegion::get();
                break;
                case 'provinces' :
                    $data = LocationProvince::get();
                break;
                case 'municipalities' :
                    $data = LocationMunicipality::get();
                break;
                case 'barangays' :
                    $data = LocationBarangay::get();
                break;
            }
            return $data;
        }
    }

    public function schools(Request $request,$type){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;

        if($type == 'count'){
            $in = SchoolCampus::where('region_code',$region)->count();
            $out = SchoolCampus::where('region_code','!=',$region)->count();
            $assigned = SchoolCampus::where('assigned_region',$region)->count();
            $array = [
                'Inside' => $in,
                'Outside' => $out,
                'Assigned' => $assigned,
                'Total' => $in + $out
            ];
            return $array;
        }else if($type == 'download'){
            $data = School::with('campuses','campuses.courses')->get();
            return $data;
        }else{
            $data = School::with('campuses','campuses.courses')->get();
            return $data;
        }
    }

    public function lists(Request $request,$type){
        if($type == 'count'){
            $array = [
                'Agencies' => ListAgency::count(),
                'Courses' => ListCourse::count(),
                'Programs' => ListProgram::count(),
                'Privileges' => ListPrivilege::count(),
                'Dropdowns' => ListDropdown::count(),
                'Statuses' => ListStatus::count()
            ];
            return $array;
        }else{
            switch($type){
                case 'agencies' :
                    $data = ListAgency::get();
                break;
                case 'courses' :
                    $data = ListCourse::get();
                break;
                case 'programs' :
                    $data = ListProgram::get();
                break;
                case 'privileges' :
                    $data = ListPrivilege::get();
                break;
                case 'dropdowns' :
                    $data = ListDropdown::get();
                break;
                case 'statuses' :
                    $data = ListStatus::get();
                break;
                case 'settings' :
                    return $this->settings($request);
                break;
            }
            return $data;
        }
    }

    public function settings($request){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $agency = $token->tokenable->profile->agency->id;
        return $agency;
    }

    public function user(Request $request){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        if($token){
            return response()->json(['status' => true], 200);
        }else{
            return response()->json(['status' => 'Unauthorized'], 401);
        }
    }

    public function scholars(Request $request){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;
       
        $data = Scholar::with('address')->with('education')->with('profile')
        ->whereHas('education',function ($query) use ($region) {
            $query->whereHas('school',function ($query) use ($region) {
                $query->where('assigned_region',$region); 
            });
        })
        ->get();
        return $data;
    }

    public function qualifiers(Request $request){
        $info['year'] = Qualifier::max('qualified_year');
        $info = (!empty(json_decode($request->info))) ? json_decode($request->info) : NULL;
        $filter = (!empty(json_decode($request->subfilters))) ? json_decode($request->subfilters) : NULL;
        $keyword = $info->keyword;
        $counts = $info->counts;
        $type = $info->type;

        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;

        $data = Qualifier::with('address')->with('profile')
        ->when($type, function ($query,$type) {
            $query->where('is_undergrad',$type);
        })

        // ->whereHas('address',function ($query) use ($region,$filter,$type) {
        //     ($type) ? $query->where('region_code',$region) : ''; 
        //     if(!empty($filter)){
        //         (property_exists($filter, 'region')) ? $query->where('region_code',$filter->region) : '';
        //         (property_exists($filter, 'province')) ? $query->where('province_code',$filter->province) : '';
        //         (property_exists($filter, 'municipality')) ? $query->where('municipality_code',$filter->municipality) : '';
        //         (property_exists($filter, 'barangay')) ? $query->where('barangay_code',$filter->barangay) : '';
        //     }
        // })
        // ->whereHas('profile',function ($query) use ($keyword) {
        //     $query->when($keyword, function ($query, $keyword) {
        //         $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
        //         ->where(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
        //         ->orWhere('spas_id','LIKE','%'.$keyword.'%');
        //     });
        // })
        // ->whereHas('status',function ($query) use ($info) {
        //     if(!empty($info)){
        //         ($info->status == null) ? '' : $query->where('status_id',$info->status);
        //     }
        // })
        // ->where(function ($query) use ($info,$filter) {
        //     if(!empty($filter)){
        //         (property_exists($filter, 'program')) ? $query->where('program_id',$filter->program) : '';
        //         (property_exists($filter, 'subprogram')) ? $query->where('subprogram_id',$filter->subprogram) : '';
        //     }
        //     if(!empty($info)){
        //         ($info->year == null) ? '' : $query->where('qualified_year',$info->year);
        //     }
        //  })
         ->where(function ($query) use ($region,$type){
            if(!$type){
                $query->where('school_region',$region);
            }
        })
        ->when($type, function ($query,$type) {
            $query->where('is_undergrad',$type);
        })
        ->paginate($counts);
        return IndexResource::collection($data);
    }

    public function endorsements(Request $request){
        $info['year'] = Qualifier::max('qualified_year');
        $info = (!empty(json_decode($request->info))) ? json_decode($request->info) : NULL;
        $filter = (!empty(json_decode($request->subfilters))) ? json_decode($request->subfilters) : NULL;
        $keyword = $info->keyword;
        $counts = $info->counts;
        $type = $request->type;

        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;

        $data = Qualifier::where('is_endorsed',1)
        ->with('address')->with('profile')
        ->with('endorsement.endorsedby','endorsement.endorsedto','endorsement.course','endorsement.school.school')
        ->whereHas('endorsement',function ($query) use ($region,$type){
            ($type == 'From') ? $query->where('endorsed_to',$region) : $query->where('endorsed_by',$region);
        })
        ->whereHas('address',function ($query) use ($filter) {
            if(!empty($filter)){
                (property_exists($filter, 'region')) ? $query->where('region_code',$filter->region) : '';
                (property_exists($filter, 'province')) ? $query->where('province_code',$filter->province) : '';
                (property_exists($filter, 'municipality')) ? $query->where('municipality_code',$filter->municipality) : '';
                (property_exists($filter, 'barangay')) ? $query->where('barangay_code',$filter->barangay) : '';
            }
        })
        ->whereHas('profile',function ($query) use ($keyword) {
            $query->when($keyword, function ($query, $keyword) {
                $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                ->where(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%')
                ->orWhere('spas_id','LIKE','%'.$keyword.'%');
            });
        })
        ->whereHas('status',function ($query) use ($info) {
            if(!empty($info)){
                ($info->status == null) ? '' : $query->where('status_id',$info->status);
            }
        })
        ->where(function ($query) use ($info,$filter) {
            if(!empty($filter)){
                (property_exists($filter, 'program')) ? $query->where('program_id',$filter->program) : '';
                (property_exists($filter, 'subprogram')) ? $query->where('subprogram_id',$filter->subprogram) : '';
            }
            if(!empty($info)){
                ($info->year == null) ? '' : $query->where('qualified_year',$info->year);
            }
         })
        ->paginate($counts);
        return IndexResource::collection($data);
    }

    public function statisticsq(Request $request){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;
        $year = Qualifier::max('qualified_year');

        $statuses = ListStatus::where('type','Qualifier')->get();
        foreach($statuses as $status){
            $statistics[] = [
                'status' => $status->name,
                'count' => Qualifier::where('is_endorsed',0)->where('status_id',$status->id)
                        ->where('qualified_year',$year)
                        ->whereHas('address',function ($query) use ($region) {
                            $query->where('region_code',$region);
                        })
                        ->count()
            ];
        }
        $types = [
            Qualifier::where('is_undergrad',1)
            ->whereHas('address',function ($query) use ($region) {
                $query->where('region_code',$region);
             })->where('qualified_year',$year)->count(),
            Qualifier::where('is_undergrad',0)
            ->where('school_region',$region)
            ->where('qualified_year',$year)->count(),
        ];

        $array = [
            'year' => $year,
            'total' => Qualifier::where('qualified_year',$year)
            ->whereHas('address',function ($query) use ($region) {
                $query->where('region_code',$region);
             })->count(),
            'ongoing' =>  Qualifier::whereHas('type',function ($query) {
                $query->where('name','Enrolled');
            })
            ->where('is_endorsed',0)
            ->whereHas('address',function ($query) use ($region) {
                $query->where('region_code',$region);
             })
            ->where('qualified_year',$year)->count(),
            'statistics' => $statistics,
            'types' => $types,
            'endorsements' =>  Qualifier::where('is_endorsed',1)->whereHas('address',function ($query) use ($region) {
                $query->where('region_code',$region);
            })->where('qualified_year',$year)->count()
        ];
        return $array;
    }

    public function statisticse(Request $request){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;
        
        $total = Qualifier::where('is_endorsed',1)->whereHas('endorsement',function ($query) use ($region) {
            $query->where('endorsed_to',$region);
         })->count();

        $statistics = [
            Qualifier::where('is_endorsed',1)->whereHas('endorsement',function ($query) use ($region) {
                $query->where('endorsed_to',$region);
            })->where('is_undergrad',1)->count(),
            Qualifier::where('is_endorsed',1)->whereHas('endorsement',function ($query) use ($region) {
                $query->where('endorsed_to',$region);
            })->where('is_undergrad',0)->count(),
            $total
        ];

        $types = [
            Qualifier::where('is_endorsed',1)->whereHas('type',function ($query) {
                $query->where('name','Enrolled');
            })
            ->whereHas('endorsement',function ($query) use ($region) {
                $query->where('endorsed_by',$region);
             })->count(),
             Qualifier::where('is_endorsed',1)->whereHas('type',function ($query) {
                $query->where('name','Enrolled');
            })
            ->whereHas('endorsement',function ($query) use ($region) {
                $query->where('endorsed_to',$region);
             })->count()
        ];

        $array = [
            'total' => $total,
            'ongoing' =>  Qualifier::where('is_endorsed',1)->whereHas('type',function ($query) {
                $query->where('name','Enrolled');
            })
            ->whereHas('endorsement',function ($query) use ($region) {
                $query->where('endorsed_to',$region);
             })->count(),
            'statistics' => $statistics,
            'types' => $types
        ];
        return $array;
    }
}

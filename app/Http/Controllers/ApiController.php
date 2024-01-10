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

        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;

        $data = Qualifier::with('address')->with('profile')
        ->whereHas('address',function ($query) use ($region,$filter) {
            $query->where('region_code',$region); 
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
                ($info->status == null) ? '' : $query->where('status_type',$info->status);
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
         ->where(function ($query){
            $query->where('is_endorsed',0);
        })
        ->paginate($counts);
        return IndexResource::collection($data);
    }

    public function statistics(Request $request){
        $bearer = $request->bearerToken();
        $token = PersonalAccessToken::findToken($bearer);
        $region = $token->tokenable->profile->agency->region_code;

        // $data = Qualifier::select('status_type', \DB::raw('COUNT(*) as count'))
        // ->whereHas('address',function ($query) use ($region) {
        //     $query->where('region_code',$region); 
        // })
        // ->groupBy('status_type')
        // ->get();

        $statistics = ListStatus::leftJoin('qualifiers', 'list_statuses.id', '=', 'qualifiers.status_type')
        ->select('list_statuses.name as status', \DB::raw('coalesce(COUNT(qualifiers.id), 0) as count'))
        ->where('type','Qualifier')
        ->groupBy('list_statuses.id')
        ->get();
        
        $year = Qualifier::max('qualified_year');
        $array = [
            'year' => $year,
            'total' => Qualifier::where('qualified_year',$year)->count(),
            'statistics' => $statistics,
            'ongoing' =>  Qualifier::whereHas('type',function ($query) {
                $query->where('name','Enrolled');
            })->where('qualified_year',$year)->count(),
        ];
        return $array;
    }
}

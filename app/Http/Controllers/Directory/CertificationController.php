<?php

namespace App\Http\Controllers\Directory;

use App\Models\SchoolCourse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\School\CourseResource;
use App\Traits\HandlesTransaction;

class CertificationController extends Controller
{
    use HandlesTransaction;
    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->lists($request);
            break;
            default :
            return inertia('Modules/Directory/Certifications/Index');
        }
    }

    public function lists($request){
        $data = SchoolCourse::with('school.school','course')
        ->when($request->keyword, function ($query, $keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })->paginate($request->counts);
        
        return CourseResource::collection($data);
    }

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            $data = SchoolCourse::where('id',$request->id)->update($request->except('editable'));
            $data = SchoolCourse::with('school.school','course')->where('id',$request->id)->first();
            return new CourseResource($data);
        });
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}

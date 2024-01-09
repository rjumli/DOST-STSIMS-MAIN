<?php

namespace App\Http\Controllers\Directory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CourseService;
use App\Traits\HandlesTransaction;

class CourseController extends Controller
{
    use HandlesTransaction;
    protected $courseService;

    public function __construct(CourseService $course)
    {
        $this->course = $course;
    }

    public function index(Request $request){
        $option = $request->option;
        switch($option){
            case 'lists':
                return $this->course->lists($request);
            break;
            default : 
            return inertia('Modules/Directory/Courses/Index');
        }
    }

    public function store(Request $request){
        switch($request->type){
            case 'preview':
                return $this->course->preview($request);
            break;
            case 'import':
                return $this->course->import($request);
            break;
        }
    }

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->course->edit($request);
        });
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function api(){
        $data = $this->course->api();
        return $data;
    }
}

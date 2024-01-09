<?php

namespace App\Http\Controllers\Directory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SchoolService;
use App\Traits\HandlesTransaction;
use App\Http\Requests\SchoolRequest;

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
}

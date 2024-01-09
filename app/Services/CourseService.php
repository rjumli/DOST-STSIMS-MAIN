<?php

namespace App\Services;

use App\Models\ListCourse;
use App\Imports\CourseImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\DefaultResource;

class CourseService
{
    public static function lists($request){
        $data = ListCourse::when($request->keyword, function ($query, $keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->when($request->status, function ($query, $status) {
            if($status != 'All'){
                $status = ($status == 'Active') ? 1 : 0; 
                $query->where('is_active',$status);
            }
        })->paginate($request->counts);
        return DefaultResource::collection($data);
    }

    public static function preview($request){
        $data =  Excel::toCollection(new CourseImport,$request->import_file);
        $rows = $data[0]; 
        foreach($rows as $row){ 
            if($row[1] != ''){
                $information[] = [
                    'id' => $row[0],
                    'name' => strtoupper(strtolower($row[1])),
                ];
            }
        }
        return $information;
    }

    public static function edit($request){
        $data = ListCourse::findOrFail($request->id)->update($request->except('editable'));
        $data = ListCourse::findOrFail($request->id)->first();
        return new DefaultResource($data);
    }

    public static function import($request){
        set_time_limit(0);
        $result = \DB::transaction(function () use ($request){
            $lists = $request->lists;
            $success = array();
            $failed = array();
            $duplicate = array();
            
            foreach($lists as $list){
                $count = ListCourse::where('name',$list['name'])->count();
                if($count == 0){
                    $course = [ 
                        'name' => $list['name'],
                        'is_active' => 1,
                        'created_at'	=> now(),
                        'updated_at'	=> now()
                    ];

                    \DB::beginTransaction();
                    $data = ListCourse::create($course);
                    if($data){            
                        array_push($success,$list['id']);
                        \DB::commit();
                    }else{
                        array_push($failed,$list['id']);
                        \DB::rollback();
                    }
                }else{
                    array_push($duplicate,$list['id']);
                }
            }

            $result = [
                'success' => $success,
                'failed' => $failed,
                'duplicate' => $duplicate,
            ];

            return $result;
        });
        return $result;
    }

    public static function api(){
        $data = ListCourse::all();
        return $data;
    }
}

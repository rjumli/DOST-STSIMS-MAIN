<?php

namespace App\Http\Controllers\Scholar;

use App\Services\Qualifier\ViewService;
use App\Services\Qualifier\SaveService;
use App\Services\Qualifier\TruncateService;
use App\Services\Qualifier\UpdateService;
use App\Services\Qualifier\ApiService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HandlesTransaction;

class QualifierController extends Controller
{
    use HandlesTransaction;
    public $save, $view, $truncate, $api;

    public function __construct(ViewService $view, SaveService $save, TruncateService $truncate, UpdateService $update, ApiService $api)
    {
        $this->view = $view;
        $this->save = $save;
        $this->truncate = $truncate;
        $this->update = $update;
        $this->api = $api;
    }

    public function index(Request $request){
        $option = $request->option;
        switch($option){
            case 'lists':
                return $this->view->lists($request);
            break;
            default : 
            return inertia('Modules/Scholars/Qualifiers/Index',$this->view->statistics());
        }
    }

    public function store(Request $request){
        $type = $request->type;
        switch($type){
            case 'preview':
                return $this->save->preview($request);
            break;
            case 'import':
                return $this->save->import($request);
            break;
            case 'truncate':
                return $this->truncate->truncate($request);
            break;
            case 'enroll':
                return $this->update->enroll($request);
            break;
            case 'endorse':
                return $this->update->endorse($request);
            break;
            case 'endorsed':
                return $this->update->endorsed($request);
            break;
            case 'update':
                return $this->update->update($request);
            break;
            case 'edit':
                return $this->update->edit($request);
            break;
            case 'api':
                return $this->api->jlss($request);
            break;
        }
    }
}

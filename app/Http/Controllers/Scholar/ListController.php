<?php

namespace App\Http\Controllers\Scholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ScholarRequest;
use App\Services\Scholar\ViewService;
use App\Services\Scholar\SaveService;
use App\Services\Scholar\TruncateService;
use App\Traits\HandlesTransaction;
use App\Exports\EntryExport;
use Maatwebsite\Excel\Facades\Excel;

class ListController extends Controller
{
    use HandlesTransaction;
    public $save, $view, $truncate;
    
    public function __construct(ViewService $view, SaveService $save, TruncateService $truncate)
    {
        $this->view = $view;
        $this->save = $save;
        $this->truncate = $truncate;
    }

    public function index(Request $request){
        $option = $request->option;
        switch($option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'search':
                return $this->search($request);
            break;
            case 'print':
                return $this->print($request);
            break;
            case 'export':
                return $this->export();
            break;
            default : 
            return inertia('Modules/Scholars/Lists/Index',$this->view->statistics());
        }
    }

    public function store(ScholarRequest $request){
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
            
        }
    }

    public function export() {
        return Excel::download(new EntryExport, 'users.xls');
    }

    public function api(Request $request){
        return $this->view->api($request);
    }
}

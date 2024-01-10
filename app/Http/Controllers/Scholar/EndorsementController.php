<?php

namespace App\Http\Controllers\Scholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Endorsement\ViewService;

class EndorsementController extends Controller
{
    public $view;

    public function __construct(ViewService $view)
    {
        $this->view = $view;
    }

    public function index(Request $request){
        $option = $request->option;
        switch($option){
            case 'lists':
                return $this->view->lists($request);
            break;
            default : 
            return inertia('Modules/Scholars/Endorsements/Index');
        }
    }
}

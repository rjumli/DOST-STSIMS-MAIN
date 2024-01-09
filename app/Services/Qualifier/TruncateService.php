<?php

namespace App\Services\Qualifier;

use DB;
use App\Models\Qualifier;
use App\Models\QualifierProfile;
use App\Models\QualifierAddress;
use App\Models\Endorsement;

class TruncateService
{
    public function truncate($request){
        $subtype = $request->subtype;

        switch($subtype){
            case 'scholars':
                $this->scholars();
            break;
            case 'qualifiers':
                $this->qualifiers();
            break;
        }
    }

    public function qualifiers(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Qualifier::truncate();
        QualifierAddress::truncate();
        QualifierProfile::truncate();
        Endorsement::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        return back()->with([
            'data' => true,
            'message' => 'Database Truncated Succesfully',
            'type' => 'bxs-check-circle',
            'color' => 'success'
        ]);
    }
}

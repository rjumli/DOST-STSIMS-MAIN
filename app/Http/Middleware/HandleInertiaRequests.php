<?php

namespace App\Http\Middleware;

use App\Models\ListProgram;
use App\Models\ListDropdown;
use App\Models\ListAgency;
use App\Models\ListStatus;
use App\Models\ListExpense;
use App\Models\ListPrivilege;
use App\Models\LocationRegion;
use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Http\Resources\Dropdown\ListResource;
use App\Http\Resources\Dropdown\LocationResource;
use App\Http\Resources\Dropdown\ProgramResource;
use App\Http\Resources\Dropdown\StatusResource;
use App\Http\Resources\Dropdown\AgencyResource;
use App\Http\Resources\Staff\IndexResource as StaffResource;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => (\Auth::check()) ? new StaffResource(\Auth::user()) : '',
            'flash' => [
                'data' => session('data'),
                'message' => session('message'),
                'info' => session('info'),
                'status' => session('status'),
            ],
            'regions' => LocationResource::collection(LocationRegion::all()),
            'dropdowns' => ListResource::collection(ListDropdown::all()),
            'programs' => ProgramResource::collection(ListProgram::all()),
            'statuses' => StatusResource::collection(ListStatus::all()),
            'agencies' => AgencyResource::collection(ListAgency::all()),
            'privileges' => ListPrivilege::all(),
        ]);
    }
}

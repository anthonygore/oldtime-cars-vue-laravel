<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Pack the state provided into an appropriate response for the request
     * @param  array $state
     * @return Illuminate\Http\JsonResponse|Illuminate\View\View
     */
    protected function pack($state)
    {
        if (request()->ajax()) {
            return response()->json($state);
        }
        return view('app', compact('state'));
    }
}

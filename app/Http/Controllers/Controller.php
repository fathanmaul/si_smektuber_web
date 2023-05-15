<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function backWithSuccess($routeName, $message)
    {
        return redirect()->route($routeName)->with('flash', [
            'type' => 'success',
            'message' => $message
        ]);
    }

    function backWithError($routeName, $message)
    {
        return redirect()->route($routeName)->with('flash', [
            'type' => 'danger',
            'message' => $message
        ]);
    }
}

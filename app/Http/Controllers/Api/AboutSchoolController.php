<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutSchoolController extends Controller
{
    //
    public function show()
    {
        try {
            $about = About::first();
            
            if ($about) {
                return Response::success($about);
            } else {
                return Response::error('No information data found', [], 404);
            }
        } catch (\Exception $e) {
            return Response::internalServerError($e->getMessage());
        }
    }
}

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
                $about->school_logo = formatImageUrl($about->school_logo);
                $about->school_picture_1 = formatImageUrl($about->school_picture_1);
                $about->school_picture_2 = formatImageUrl($about->school_picture_2);
                $about->school_headmaster_picture = formatImageUrl($about->school_headmaster_picture);
                return Response::success($about);
            } else {
                return Response::error('No information data found', [], 404);
            }
        } catch (\Exception $e) {
            return Response::internalServerError($e->getMessage());
        }
    }
}

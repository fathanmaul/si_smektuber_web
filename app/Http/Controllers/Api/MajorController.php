<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Major;

class MajorController extends Controller
{
    public function getListMajor()
    {
        $page = request()->get('page') ?? 1;

        try {
            // return Response::paginate(Major::paginate(10, ['*'], 'page', $page));
            $majors = Major::paginate(10, ['*'], 'page', $page);
        
            $imageMajors = $majors->getCollection()->map(function ($major) {
                $major->major_logo =formatImageUrl($major->major_logo) ;
                $major->picture_1 = formatImageUrl($major->picture_1)  ;
                return $major;
            });

            $formattedPaginatedMajors = $majors->setCollection($imageMajors);

            return Response::paginate($formattedPaginatedMajors);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $major = Major::find($id);
            if (!$major) {
                return Response::error('Major not found', [], 404);
            }

            $major->major_logo = formatImageUrl($major->major_logo);
            $major->picture_1 = formatImageUrl($major->picture_1);

            return Response::success($major);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
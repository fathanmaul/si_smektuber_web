<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular as Extra;

class ExtraController extends Controller
{
    public function index()
    {
        $page = request()->get('page') ?? 1;

        try {
            $extras = Extra::paginate(10, ['*'], 'page', $page);

            $imageExtras = $extras->getCollection()->map(function ($extra) {
                $extra->extracurricular_logo = formatImageUrl($extra->extracurricular_logo);
                $extra->extracurricular_photo_1 =  formatImageUrl($extra->extracurricular_photo_1);
                return $extra;
            });

            $formattedPaginateExtras = $extras->setCollection($imageExtras);
            return Response::paginate( $formattedPaginateExtras );
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $extra = Extra::find($id);
            if (!$extra) {
                return Response::error('Extrakurikuler not found', [], 404);
            }
            $extra->extracurricular_logo = formatImageUrl($extra->extracurricular_logo);
            $extra->extracurricular_photo_1 =  formatImageUrl($extra->extracurricular_photo_1);
            return Response::success($extra);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
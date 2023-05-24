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
            return Response::paginate(Major::paginate(10, ['*'], 'page', $page));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            if (!Major::find($id)) {
                return Response::error('Major not found', [], 404);
            }
            return Response::success(Major::find($id));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
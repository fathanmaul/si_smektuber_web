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
            return Response::paginate(Extra::paginate(10, ['*'], 'page', $page));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            if (!Extra::find($id)) {
                return Response::error('Extra not found', [], 404);
            }
            return Response::success(Extra::find($id));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
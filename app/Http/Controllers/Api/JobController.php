<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loker as Job;

class JobController extends Controller
{
    public function index()
    {
        $page = request()->get('page') ?? 1;

        try {
            return Response::paginate(Job::paginate(10, ['*'], 'page', $page));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            if (!Job::find($id)) {
                return Response::error('Job not found', [], 404);
            }
            return Response::success(Job::findOrFail($id));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
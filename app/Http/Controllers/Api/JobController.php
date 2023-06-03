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
            // return Response::paginate(Job::paginate(10, ['*'], 'page', $page));
            $jobs = Job::paginate(10, ['*'], 'page', $page);

            $imageJobs = $jobs->getCollection()->map(function ($job){
                $job->thumbnail = formatImageUrl($job->thumbnail);
                return $job;
            });

            $formattedPaginateJobs = $jobs->setCollection($imageJobs);

            return Response::paginate($formattedPaginateJobs);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $job = Job::find($id);
            if (!$job) {
                return Response::error('Job not found', [], 404);
            }

            $job->thumbnail = formatImageUrl($job->thumbnail);
            return Response::success($job);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
<?php
namespace App\Http\Controllers\Api;

class Response
{
    /**
     * Success response
     * 
     * @param array $data
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = null, $message = null, $status = 200)
    {
        $data = is_array($data) ? $data : $data;
        $data = is_null($data) ? [] : $data;

        return response()->json([
            'status' => $status,
            'message' => $message ?? 'Success',
            'data' => $data,
        ], $status);
    }

    /**
     * Success response with pagination
     * 
     * @param array|object $data
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public static function paginate($data, $message = null, $status = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $message ?? 'Success',
            'data' => $data->items(),
            'pagination' => [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'first_page_url' => $data->url(1),
                'last_page_url' => $data->url($data->lastPage()),
                'next_page_url' => $data->nextPageUrl(),
                'prev_page_url' => $data->previousPageUrl(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem()
            ]
        ], $status);
    }

    /**
     * Error response
     * 
     * @param string $message
     * @param array $data
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error($message, $data = [], $status = 400)
    {
        if (count($data) == 0) {
            $data = json_decode('{}');
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    /**
     * Unauthorized response
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public static function unauthorized()
    {
        return response()->json([
            'status' => 401,
            'message' => 'Unauthorized',
            'data' => json_decode('{}')
        ], 401);
    }

    /**
     * Not Found response
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public static function notFound()
    {
        return response()->json([
            'status' => 404,
            'message' => 'Not Found',
            'data' => json_decode('{}')
        ], 404);
    }

    /**
     * Internal Server Error response
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public static function internalServerError($message = null)
    {
        return response()->json([
            'status' => 500,
            'message' => $message ?? 'Internal Server Error',
            'data' => json_decode('{}')
        ], 500);
    }

    /**
     * Bad Request response
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public static function badRequest()
    {
        return response()->json([
            'status' => 400,
            'message' => 'Bad Request',
            'data' => json_decode('{}')
        ], 400);
    }

    /**
     * Forbidden response
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public static function forbidden()
    {
        return response()->json([
            'status' => 403,
            'message' => 'Forbidden',
            'data' => json_decode('{}')
        ], 403);
    }
}
<?php
namespace App\Http\Controllers\Api;

class Response
{
    /**
     * Success response
     * 
     * @param array $data
     * @param int $status
     */
    public static function success($data = [], $message = null, $status = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $message ?? 'Success',
            'data' => $data
        ], $status);
    }

    /**
     * Error response
     * 
     * @param string $message
     * @param array $data
     * @param int $status
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
     */
    public static function internalServerError($message = null)
    {
        return response()->json([
            'status' => 500,
            'message' => 'Internal Server Error',
            'data' => json_decode('{}')
        ], 500);
    }

    /**
     * Bad Request response
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
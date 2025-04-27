<?php

namespace App\Helpers;

class ApiResponseFormat
{
    public static function sendResponse($responseCode, $responseMessage, $responseData)
    {
        $response = [
            'statusCode' => $responseCode,
            'message' => $responseMessage,
            'clientData' => $responseData,
        ];
        return response()->json($response, $responseCode);
    }
}

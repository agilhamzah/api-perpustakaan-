<?php

namespace APP\Helpers;

class ApiFormatter{
    protected static $response = [
        'code' => null,
        'message' => null,
        'siswa' => null,
    ];

    public static function createApi($code = null, $message = null, $data = null){
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['siswa'] = $siswa;

        return response()->json(self::$response, self::$response['code']);
    }
}
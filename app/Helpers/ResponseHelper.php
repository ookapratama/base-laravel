<?php

namespace App\Helpers;


class ResponseHelper
{
  public static function success($data = null, string $message = 'Success')
  {
    return response()->json([
      'status' => true,
      'message' => $message,
      'data' => $data,
    ]);
  }


  public static function error(string $message = 'Error', int $code = 400)
  {
    return response()->json([
      'status' => false,
      'message' => $message,
    ], $code);
  }
}

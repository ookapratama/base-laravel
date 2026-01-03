<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="Base Laravel API Documentation",
 *     version="1.0.0",
 *     description="Dokumentasi API untuk Base Laravel Template. Gunakan Bearer Token untuk otentikasi jika diperlukan.",
 *     @OA\Contact(
 *         email="admin@example.com"
 *     )
 * )
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="API Server Utama"
 * )
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */
abstract class Controller
{
    //
}

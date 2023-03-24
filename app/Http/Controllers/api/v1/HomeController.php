<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            "version" => "APi v1",
            "Ese" => "Uliza services",
            "Language" => app()->getLocale(),
            "APP_NAME" => env("APP_NAME"),
            "PHP_VERSION" => PHP_VERSION,
        ]);
    }
}

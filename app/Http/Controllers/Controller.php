<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function zettani()
    {
        return "Zettani";
    }

    public static function dataInfo(string $title): array
    {
        return [
            'title' => $title . ' | ' . self::zettani(),
            'app_name' => self::zettani()
        ];
    }
}

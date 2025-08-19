<?php

namespace App\Plugins;

use Coderello\SharedData\Facades\SharedData;
use Illuminate\Support\Facades\Route;

trait Response
{
    public static function sentJson($data, $code = 200)
    {
        return response()->json($data, $code);
    }

    public static function redirectBack($data = null, $back = false)
    {
        if (request()->hasHeader('authorization')) {
            return self::sentJson($data);
        }

        if (request()->wantsJson()) {
            return self::sentJson($data);
        }

        return redirect()->back();
    }
}

<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class Helper
{
    public static function uploadFile($file, $destination)
    {
        if ($file) {
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(($destination), $name);
            
            return "/$destination/" . $name;
        }
    }
}


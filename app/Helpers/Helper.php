<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class Helper
{
    public static function uploadImg(Request $request, $fieldname = 'url')
	    {
            if ($request->hasFile($fieldname)) 
            {
                $file = $request->file($fieldname);
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(('img'), $name);
                return '/img/'.$name;
            }
        }
    public static function uploadSong(Request $request, $fieldname = 'url')
	    {
            if ($request->hasFile($fieldname)) 
            {
                $file = $request->file($fieldname);
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(('song'), $name);
                return '/song/'.$name;
            }
        }
}


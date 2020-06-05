<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FileTrait {
	function uploadFile(Request $request, $fieldname = 'url')
	{
		if( $request->hasFile( $fieldname ) ) 
		{
			$file = $request->file($fieldname)->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file($fieldname)->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
			$request->file($fieldname)->storeAs('public/img', $fileNameToStore);
			return $fileNameToStore ;
		}
	}
	function uploadSong(Request $request, $fieldname = 'url')
	{
		if( $request->hasFile( $fieldname ) ) 
		{
			$file = $request->file($fieldname)->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file($fieldname)->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
			$request->file($fieldname)->storeAs('public/song', $fileNameToStore);
			return $fileNameToStore ;
		}
	}
}
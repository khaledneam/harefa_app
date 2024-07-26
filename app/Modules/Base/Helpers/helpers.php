<?php

if (!function_exists('uploadPhoto')) {
    function uploadPhoto($file, $destinationPath = 'photos')
    {
        // Validate the file
//        if ($file && $file->isValid()) {
//            $filename = time() . '.' . $file->getClientOriginalExtension();
//            $file->move(public_path($destinationPath), $filename);
//            return $filename;
//        }
//        return false;
        if ($file && $file->isValid()) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $filename);
            return (string) ($destinationPath . '/' . $filename);
        }
        return false;
    }
}

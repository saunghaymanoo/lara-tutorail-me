<?php
namespace App;

use Illuminate\Support\Facades\Auth;

class Utility{
    public static function UpdateBy($newObj){
        if(Auth::guard('Administrator')->check()){
            $userId = Auth::guard('Administrator')->user()->id;
            $newObj->updated_by = $userId;
            $newObj->updated_at = date('Y-m-d H:i');
        }
        return $newObj;
    }
}
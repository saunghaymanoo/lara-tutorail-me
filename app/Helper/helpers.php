<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('getUserName')){
    function getUserName(){
        $username = Auth::guard('Administrator')->user()->name;
        return $username;
    }
}
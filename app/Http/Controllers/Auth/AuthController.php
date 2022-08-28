<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        if(Auth::guard('Administrator')->check()){
            $role = Auth::guard('Administrator')->user()->role;
            if($role == 'admin'){
                return redirect('admin/home');
            }elseif($role == 'manager'){
                return redirect('manager/home');
            }
        }
        return view('auths.login');
    }
    public function getPostLogin(Request $request){
        // dd($request);
        $validation = Auth::guard('Administrator')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // dd($validation);
        if($validation){
            $role = Auth::guard('Administrator')->user()->role;
            
            if($role == 'admin'){
                return redirect('admin/home')->with('status','login successful');
            }elseif($role == 'manager'){
                return redirect('manager/home')->with('status','login successful');
            }else{
                return redirect('login')->with('status','login fail');
            }
        }else{
           
            return redirect('login')->with('status','login fail');

        }
    }
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}

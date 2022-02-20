<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controllerAdmin extends Controller
{
    function checkLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
       if(Auth::attempt($data)){
             return redirect('/admin');
       }else {
           return redirect('adminlogin')->with('mess','Thông tin đăng nhập không chính xác');
       }
   }

   function logout(){
       Auth::logout();
       return redirect('adminlogin');
   }
}

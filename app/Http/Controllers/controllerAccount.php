<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

//CHUA SUA CODE
class controllerAccount extends Controller
{
    public function register()
    {
        return view('site/register');
    }

    public function checkRegister(Request $request)
    {
        $password = bcrypt($request->input('password'));
        DB::table('users')->insert([
            'email' => $request->input('email'),
            'password' => $password,
            'phone' => $request->input('phone'),
            'full_name' => $request->input('full_name'),
            'active' => $request->input('active')
        ]);
        return redirect('home');
    }

    public function login()
    {
        return view('site/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
    public function logoutAdmin()
    {
        Auth::logout();
        return view('admin/loginAdmin');
    }

    public function checkLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::attempt(['email'=>$email, 'password'=>$password])){
                $getProduct = Tour::get();
                $user = Auth::user();
                return view('site/home',['user'=>$user,'result'=>$getProduct]);
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function checkAdmin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::attempt(['email'=>$email, 'password'=>$password,'active' =>0])){
                $user = Auth::user();
                return view('admin/home',['user'=>$user,]);
            }
            else{
                return redirect()->back();
            }
        }
    }
}

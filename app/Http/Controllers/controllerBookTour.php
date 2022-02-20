<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\DB;
class controllerBookTour extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->permissions == 1){
                $userId = Auth::user()->id_account;
                // Show Booking by id_account
                $result = DB::table('booking')
                ->select('id_booking','id_tour','id_account','email','full_name','phone','day_number','people_number','payment_method','start_day','end_day','note','total')
                ->where('id_account', '=', $userId)
                ->where('id_room','=',null)
                ->get();
                return view('admin/bookTour/bookTour', ['result' => $result]);
            }
            if($user->permissions == 0){
                $result = DB::table('booking')
                ->select('id_booking','id_tour','id_account','email','full_name','phone','day_number','people_number','payment_method','start_day','end_day','note','total')
                ->where('id_room','=',null)
                ->get();
                return view('admin/bookTour/bookTour', ['result' => $result]);
            }
        }else {
            return redirect('/adminlogin');
        }
        
    }
    public function destroy($id_booking)
    {
        $user = Auth::user();
        $userId = Auth::user()->id_account;
        if($user->permissions == 0){
        Booking::destroy($id_booking);
        return redirect('/bookTour');
        }elseif($user->permissions == 1){
            $laydata = Booking::find($id_booking);
            if(isset($laydata->id_booking)){
             DB::table('booking')
            ->where('id_account', '=', $userId)
            ->where('id_booking','=',$id_booking)
            ->delete();
            return redirect('/bookTour');
            }else{
                echo 'không tồn tại trang';
            }
        }
    }
}


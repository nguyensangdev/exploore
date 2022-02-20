<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use DB;
use App\Rating;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;


class controllerClient extends Controller
{
    public function sendEmail()
    {
        $data = rand(1000, 9999);
        Mail::to('vynguyen.fff@gmail.com')->send(new OrderShipped($data));
        return redirect('/');
    }

    public function resetPassword(Request $request)
    {
        $email = $request->email;
        $code = $request->code;
        $codeDefault = $request->codeDefault;
        $users = User::where('email',$email)->first();
        if($users && !$code && !$codeDefault){
            $data = rand(100000, 999999);
            Mail::to($email)->send(new OrderShipped($data));
           return redirect('forgot-password')->with(['InputCode'=>'input','codeDefault'=>$code,'email'=>$email]);
      }elseif($email && $code && $codeDefault){
          if($code == $codeDefault){
                 

            //     DB::table('account')->where('email',$email)->update([''])

            //    $data = [
            //        'email' =>$email,
            //        'password' => $password,
            //    ];
            //    if(Auth::attempt($data)){
            //        return redirect('/');
            //    }else{
            //        return redirect('/login');
            //    }
          
      }
      else{
        return redirect('forgot-password')->with(['mess'=>'Email chưa đăng ký']);
     }
}
    }


    public function payment(Request $Request)
    {
        $id = $Request->input('id_tour');
        $id_room = $Request->input('id_room');
        $id_hotel = $Request->input('id_hotel');
        
        $end_day = '';
        $room = DB::table('room')->where('id_room',$id_room)->first();
       
        $hotel = DB::table('hotel')->where('id_hotel',$id_hotel)->first();
        $tour = DB::table('tour')->where('id_tour',$id)->first();
        $user = Auth::user();
        return view('client.payment', ['id' => $id,'user'=>$user,'tour'=>$tour,'hotel'=>$hotel,'room'=>$room,'tour' => $end_day]);
    }

    public function actionPayment(Request $request)
    {
        $user = Auth::user();
        $email = $request->input('email');
        $id_tour = $request->input('id_tour');
        $id_room = $request->input('id_room');
        $amount = $request->input('amount');
        $full_name = $request->input('full_name');
        $phone = $request->input('phone');
        $payment_method = $request->input('payment-method');
        $note = $request->input('note');
        $total = $request->input('total');
        $day_number = $request->input('day_number');
        $start_day = $request->input('start_day');
        $end_day = $request->input('end_day');
        if($user){
            $id_account = $user->id_account;
        }else{
            $id_account = null;
        }
        DB::table('booking')->insert([
            'id_room' => $id_room ? $id_room:null,
            'id_tour' => $id_tour ? $id_tour:null,
            'id_account' =>  $id_account? $id_account:null,
            'email' => $email,
            'phone' => $phone,
            'full_name' =>  $full_name,
            'people_number' => $id_tour ? $amount:null,
            'day_number' => $day_number ? $day_number:null,
            'payment_method' => $payment_method,
            'start_day' => $start_day? $start_day:null,
            'end_day' => $end_day? $end_day:null,
            'total' => $total,
            'note' => $note
        ]);
        $user = Auth::user();
        $getListTour = DB::table('tour')->where('status', 1)->get();
        $getListHotel = DB::table('hotel')->where('status', 1)->get();
        // return view('client.home', ['user' => $user, 'tour' => $getListTour, 'hotel' => $getListHotel]);
        return redirect('/notification');
    }

    public function actionMessage(Request $request)
    {
      $name = $request->input('name');
      $email = $request->input('email');
      $content = $request->input('content');

      DB::table('message')->insert([
         'id_account'=> null,
         'message_email' =>$email,
         'message_name' => $name,
         'message_content' => $content
      ]);
      $data = 'ok';
      return $data;
    }
   


    public function actionComment(Request $request)
    {
       
        $id_account = $request->id_account;
        $id_tour = $request->id_tour;
        $id_hotel = $request->id_hotel;
        $email = $request->email;
        $content = $request->contents;
        $full_name = $request->full_name;
        $rating = $request->rating;
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_comment = $date_time->toFormattedDateString();
            DB::table('comment')->insert([
                "id_account" => $id_account? $id_account : null,
                "email" => $email ? $email : null,
                "full_name" => $full_name? $full_name : null,
                "status" => 1,
                "comment_content" => $content?$content:null,
                "id_news" => null,
                "id_tour" => $id_tour?$id_tour:null,
                "id_hotel" => $id_hotel?$id_hotel:null,
                "date_comment" => $date_comment,
            ]);

            if($rating){
               DB::table('rating')->insert([
                   "id_hotel" => $id_hotel?$id_hotel:null,
                   "id_tour" =>  $id_tour?$id_tour:null,
                   "id_news" =>null,
                   "id_user" => $id_account? $id_account : null,
                   "rate_rating" => $rating ? $rating : null,
               ]);
            }


          if($id_tour){
            $comment = Comment::where('id_tour', $id_tour)->get();
            $ratings = Rating::where('id_tour',$id_tour)->get();     
          } elseif($id_hotel){
            $comment = Comment::where('id_hotel', $id_hotel)->get();
            $ratings = Rating::where('id_hotel',$id_hotel)->get();       
          }
      
        $totalRating = 0;
        foreach($ratings as $item){
            $totalRating += $item->rate_rating;
        }
        
        
            if($totalRating > 0 ) {
            $value =  round($totalRating/$ratings->count());

        }else{
            $value = 0;

        }
        
            if($id_tour){
                DB::table('tour')->where('id_tour',$id_tour)->update(['rating'=>$value]);

            }elseif($id_hotel){
                DB::table('hotel')->where('id_hotel',$id_hotel)->update(['rating'=>$value]);
            }


  return view('client.contentComment', ['comment' => $comment,'ratings'=>$ratings,'rating'=>$value]);

    }


    
}

<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;


class controllerUser extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->permissions == 0){
        $result = User::get();
        return view('admin/user/User', ['result' => $result]);
        }elseif($user->permissions == 1){
            return redirect('/');
        }
    }

    public function showProfile()
    {

        $getUser = Auth::user();
        return view('client/profile',['user' =>$getUser]);
    }
    public function changePassword()
    {

        $getUser = Auth::user();
        return view('client/changePass',['user' =>$getUser]);
    }
   public function historyRoom()
    {

        $getUser = Auth::user();
        $id_account =Auth::user()->id_account;

        $getHistoryRoom = DB::table('booking')
            ->join('room', 'booking.id_room', '=', 'room.id_room')->where('id_account',$id_account)->get();

        $getHistoryTour = DB::table('booking')
            ->join('tour', 'booking.id_tour', '=', 'tour.id_tour')->where('id_account',$id_account)->get();
        return view('client/history',['user' =>$getUser,'historyRoom'=>$getHistoryRoom,'historyTour'=>$getHistoryTour]);
    }
    public function hotelProfile()
    {

        $getUser = Auth::user();
        return view('client/hotel',['user' =>$getUser]);
    }
    public function showHotelProfile()
    {

        $getUser = Auth::user();
        return view('client/addProfileHotel',['user' =>$getUser]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/user/addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        DB::table('account')->insert([
            'email' => $request->input('email'),
            'password' => password_hash( $request->input('password'), PASSWORD_DEFAULT),
            'full_name' => $request->input('fullname'),
            'address' => $request->input('address'),
            'avatar' => 'user.png',
            'phone' => $request->input('phone'),
            'permissions' => $request->input('permissions'),
        ]);
        return redirect('user');
    }

    public function updateUser(Request $request)
    {
        $file = $request->file('avatar');
        $image_news = $file->getClientOriginalName();
        $id_account = Auth::user()->id_account;
        DB::table('account')->where('id_account',$id_account)->update([
            'email' => $request->input('email'),
            'full_name' => $request->input('fullname'),
            'address' => $request->input('address'),
            'avatar' => $image_news,
            'phone' => $request->input('phone'),
        ]);
        $request->file('avatar')->move('./public/upload', $image_news);
        return redirect('profile');
    }
    
       public function actionChangePasss(Request $request)
    {
       $currentPassword = $request->input('currentPassword');
       $newPassword = $request->input('newPassword');
       $pass =  password_hash($newPassword, PASSWORD_DEFAULT);
    $user = Auth::user();
    $hasher = app('hash');
  if ($hasher->check($currentPassword, $user->password)) {
     DB::table('account')->where('email',$user->email)->update(['password' => $pass]);
     return redirect('profile');
  }else{
      $tt = 'Wrong Password';
    return view('client/changePass',['user' =>$user,'tt'=>$tt]);
  } 
 }
    

    public function register(Request $request)
    {
        // $users = User::where('email',$request->email)->first();
        // if($users){
        //     return redirect('register')->with(['mess'=>'Email đã tồn tại']);
        // }else{
        //     DB::table('account')->insert([
        //         'email' => $request->input('email'),
        //         'password' => password_hash( $request->input('password'), PASSWORD_DEFAULT),
        //         'full_name' => $request->input('fullname'),
        //         'address' => '',
        //         'avatar' => '',
        //         'phone' => $request->input('phone'),
        //         'permissions' => 2,
        //     ]);

        $users = User::where('email',$request->email)->first();
        if($users){
            return redirect('register')->with(['mess'=>'Email has been used']);
        }else{
            $email =  $request->input('email');
            $password =  $request->input('password');
            $full_name =  $request->input('full_name');
            $phone =  $request->input('phone');
            $code = rand(100000,999999);
        Mail::to($email)->send(new OrderShipped($code));
            return view('client.email-authentication',['email'=>$email,'password'=>$password,'full_name'=>$full_name,
            'phone'=>$phone,'code'=>$code]);
        }
        }


        public function resendEmail(Request $request)
        {
            $email =  $request->input('email');
            $password =  $request->input('password');
            $full_name =  $request->input('full_name');
            $phone =  $request->input('phone');
            $code =  $request->input('code');
            Mail::to($email)->send(new OrderShipped($code));
            return view('client.email-authentication',['email'=>$email,'password'=>$password,'full_name'=>$full_name,
            'phone'=>$phone,'code'=>$code]);
        }


    public function checkRegister(Request $request){
        $email =  $request->input('email');
        $password =  $request->input('password');
        $full_name =  $request->input('full_name');
        $phone =  $request->input('phone');
        $code =  $request->input('code');
        $codeVerify = $request->input('codeVerify');
         if($code == $codeVerify){
                 DB::table('account')->insert([
                'email' =>$email,
                'password' => password_hash( $password, PASSWORD_DEFAULT),
                'full_name' =>$full_name,
                'address' =>'',
                'avatar' =>'user.png',
                'phone' =>$phone,
                'permissions' =>2,
                ]);

                $data = [
                    'email' =>$email,
                    'password' => $password,
                ];
                if(Auth::attempt($data)){
                    return redirect('/');
                }else{
                    return redirect('/login');
                }
         }else{
            return view('client.email-authentication',['email'=>$email,'password'=>$password,'full_name'=>$full_name,
            'phone'=>$phone,'code'=>$code])->with('tt','Email has been used');

         }

    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_user)
    {
        $user = Auth::user();
        if($user->permissions == 0){
        $getUserById = User::find($id_user);
        return view('admin/user/updateUser', ['result' => $getUserById]);
        }elseif($user->permissions == 1){
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request)
    {

        $id_user = $request->input('id_user');
        DB::table('account')->where('id_account', $id_user)->update([
            'email' => $request->input('email'),
            'password' => password_hash( $request->input('password'), PASSWORD_DEFAULT),
            'full_name' => $request->input('fullname'),
            'address' => $request->input('address'),
            'avatar' => 0,
            'phone' => $request->input('phone'),
            'permissions' => $request->input('permissions'),

        ]);
        return redirect('user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id_user)
    {
        $user = Auth::user();
        if($user->permissions == 0){
        User::destroy($id_user);
        return redirect('user');
        }elseif($user->permissions == 1){
            return redirect('/');
        }
    }

    function checkLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect('/');
        }else{
            return redirect('login')->with('mess','Thông tin đăng nhập không chính xác');
        }

    }

    function logout(){
        Auth::logout();
         return redirect('/');
    }
}

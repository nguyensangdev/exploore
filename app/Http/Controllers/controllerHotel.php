<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Hotel;
use App\User;
use App\Room;
use App\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// CHUA SUA CODE
class controllerHotel extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->permissions == 0){
                $result = Hotel::get();
                return view('admin/hotel/hotel', ['result' => $result]);
            }
            if($user->permissions == 1){
                $userId = Auth::user()->id_account;
                // Lấy thành phố
                $province = Province::get();
                // Show hotel by id_account
                $result = DB::table('hotel')
                ->where('id_account','=',$userId)
                ->get();
                return view('admin.hotel.hotel',['result' => $result, 'userId' => $userId, 'province' => $province]);
            }
        }else {
            return redirect('/adminlogin');
        }

    }

    /* Lấy thông tin hotel của user */
    public function getProfileHotel()
    {
        if(Auth::check()){
        // Lấy id_account
        $userId = Auth::user()->id_account;
        // Show room by id_hotel
        // Show hotel by id_account
        $result = Hotel::select('*')
        ->where('id_account','=',$userId)
        ->get();
        // Lấy thành phố
        $province = Province::get();
        return view('client/profile-hotel-management',['result' => $result, 'userId' => $userId, 'province' => $province]);
        }else {
            return redirect('/');
        }
    }
    /* Thêm hotel của user */
    public function postProfileHotel(Request $request)
    {
        $file = $request->file('hotel_img');
        $hotel_img = $file->getClientOriginalName();
        DB::table('hotel')->insert([
            'id_account' => $request->input('id_account'),
            'hotel_name' => $request->input('hotel_name'),
            'hotel_price' => $request->input('hotel_price'),
            'location' => $request->input('location'),
            'hotel_address' => $request->input('hotel_address'),
            'hotel_describes' => $request->input('hotel_describes'),
            'status' => 0,
            'sale' => 0,
            'hotel_img' => $hotel_img
        ]);
        $request->file('hotel_img')->move('upload', $hotel_img);


        return redirect('profile-hotel-management');
    }
    
    /* Cập nhật thông tin hotel của user */
    // public function postHotelRoom()
    // {
    //     // Lấy id_account
    //     $userId = Auth::user()->id_account;
    //     // Lấy hotel by id_account
    //     $getHotelById = Hotel::find($userId);
    //     return view('update-profile-hotel', ['result' => $getHotelById]);
    // }
    
    /* Cập nhật thông tin hotel của user */
    public function postHotelRoom(Request $request)
    {
        if(Auth::check()){
            // Lấy id_account
            $userId = Auth::user()->id_account;
            if ($request->hasFile('image_hotel')) {
                $file = $request->file('image_hotel');
                $image_hotel = $file->getClientOriginalName();
                $request->file('image_hotel')->move('upload', $image_hotel);
            } else {
                $image_hotel = $request->input('img');
            }
            $id_hotel = $request->input('id_hotel');
            DB::table('hotel')->where('id_hotel', $id_hotel)->where('id_account',$userId)->update([
                'id_account' => $userId,
                'hotel_name' => $request->input('hotel_name'),
                'hotel_price' => $request->input('hotel_price'),
                'hotel_address' => $request->input('hotel_address'),
                'hotel_describes' => $request->input('hotel_describes'),
                'sale' => 0,
                'status' => 0,
                'hotel_img' => $image_hotel,
            ]);
        return back();
        }
        else
        {
            return redirect('/profile-hotel-management');
        }
    }
    
    /* Trang thêm hotel admin */
    public function create()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->permissions == 1){
                 // Lấy thành phố
                $province = Province::get();
                return view('admin/hotel/addHotel',['province' => $province]);
            }else{
                $province = Province::get();
                return view('admin/hotel/addHotel',['province' => $province]);
            }
        }else {
            return redirect('/adminlogin');
        }
    }

    /* Thêm hotel admin */
    public function store(Request $request)
    {
        $file = $request->file('hotel_img');
        $hotel_img = $file->getClientOriginalName();
        DB::table('hotel')->insert([
            'id_account' => $request->input('id_account'),
            'hotel_name' => $request->input('hotel_name'),
            'hotel_price' => $request->input('hotel_price'),
            'location' => $request->input('location'),
            'hotel_address' => $request->input('hotel_address'),
            'hotel_describes' => $request->input('hotel_describes'),
            'sale' => 1,
            'status' => 1,
            'hotel_img' => $hotel_img
        ]);
        $request->file('hotel_img')->move('public/upload', $hotel_img);
        return redirect('hotel');
    }

    /* Hiện thông tin hotel room user */
    public function getHotelRoom($id)
    {
        if(Auth::check()){
        // Lấy id_account
        $userId = Auth::user()->id_account;
        // Lấy hotel by id_account
        $getHotelById = Hotel::find($id);
        // Lấy thành phố
        $province = Province::get();
        return view('client/update-profile-hotel', ['result' => $getHotelById, 'province' => $province]);
        }
        else
        {
            return view('/');
        }
    }

    /* Sửa thông tin hotel admin */
    public function edit(Request $request)
    {
        if ($request->hasFile('image_hotel')) {
            $file = $request->file('image_hotel');
            $image_hotel = $file->getClientOriginalName();
            $request->file('image_hotel')->move('public/upload', $image_hotel);
        } else {
            $image_hotel = $request->input('img');
        }
        $id_hotel = $request->input('id_hotel');
        //$userId = Auth::user()->id_account;
        DB::table('hotel')->where('id_hotel', $id_hotel)
        ->update([
            'id_account' => $request->input('id_account'),
            'hotel_name' => $request->input('hotel_name'),
            'hotel_price' => $request->input('hotel_price'),
            'hotel_address' => $request->input('hotel_address'),
            'hotel_describes' => $request->input('hotel_describes'),
            'sale' => 0,
            'status' => $request->input('status'),
            'hotel_img' => $image_hotel,
        ]);
        return redirect('hotel');
    }
    /* Show edit hotel admin */
    public function show($id_hotel)
    {
        $getHotelById_user = Hotel::select('id_account')->find($id_hotel);
        if(isset($getHotelById_user->id_account)){
        if( Auth::user()->id_account == $getHotelById_user->id_account){
        $getHotelById = Hotel::find($id_hotel);
        // Lấy thành phố
        $province = Province::get();
        return view('admin/hotel/updateHotel', ['result' => $getHotelById,'province' => $province]);
        }
        elseif(Auth::user()->permissions == 0 ) {
            $getHotelById = Hotel::find($id_hotel);
            return view('admin/hotel/updateHotel', ['result' => $getHotelById]);
        }
        }
        return redirect('hotel');
    }
    /* Xóa hotel admin */
    public function destroy($id_hotel)
    {
        Hotel::destroy($id_hotel);
        return redirect('hotel');
    }
    
    
    
    
    // Room in Hotel
     public function indexRoom()
    {
        $result_count = Room::count();
        $result_room = DB::table('room')
        ->join('hotel', 'room.id_room', '=', 'hotel.id_hotel')
        ->get();
        return view('admin/room/room', ['result_room' => $result_room, 'result_count' => $result_count]);
    }
    
    public function getRoomIdHotel($id)
    {   
        $result_idroom = Hotel::find($id);
        $result_room = DB::table('room')
        ->where('id_hotel','=',$id)
        ->get();
        
        return view('admin/room/room', ['result_room' => $result_room, 'result_idroom' => $result_idroom]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoom($id_hotel)
    {
        $getHotelById_user = Hotel::select('id_account')->find($id_hotel);
        if(isset($getHotelById_user->id_account)){
        if( Auth::user()->id_account == $getHotelById_user->id_account){
        $getHotelById = Hotel::find($id_hotel);
        return view('admin/room/addRoom', ['result' => $getHotelById]);
        }
        elseif(Auth::user()->permissions == 0 ) {
            $getHotelById = Hotel::find($id_hotel);
            return view('admin/room/addRoom', ['result' => $getHotelById]);
        }
        }
        return redirect('hotel');
    }

    public function storeRoom(Request $request)
    {
        $file = $request->file('room_img');
        $room_img = $file->getClientOriginalName();
        DB::table('room')->insert([
            'id_hotel' => $request->input('id_hotel'),
            'name_room' => $request->input('name_room'),
            'suitable_room' => $request->input('suitable_room'),
            'size_room' => $request->input('size_room'),
            'bed_room' => $request->input('bed_room'),
            'facilities_room' => $request->input('facilities_room'),
            'Smoking_room' => $request->input('Smoking_room'),
            'Parking_room' => $request->input('Parking_room'),
            'bathroom_room' => $request->input('bathroom_room'),
            'price_room' => $request->input('price_room'),
            'amount_room' => $request->input('amount_room'),
            'room_img' => $room_img
        ]);
        $request->file('room_img')->move('public/client/img/hotel-view', $room_img);
        $id_hotel = $request->input('id_hotel');
        echo "<script>window.location.assign('/room/$id_hotel')</script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRoom($id_room)
    {
        $getRoomById = Room::find($id_room);
        return view('admin/room/updateRoom', ['result' => $getRoomById]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRoom(Request $request)
    {
        if ($request->hasFile('room_img')) {
            $file = $request->file('room_img');
            $room_img = $file->getClientOriginalName();
            $request->file('room_img')->move('public/client/img/hotel-view', $room_img);
        } else {
            $room_img = $request->input('img');
        }
        $id_room = $request->input('id_room');
        DB::table('room')->where('id_room', $id_room)->update([
            'id_hotel' => $request->input('id_hotel'),
            'name_room' => $request->input('name_room'),
            'suitable_room' => $request->input('suitable_room'),
            'size_room' => $request->input('size_room'),
            'bed_room' => $request->input('bed_room'),
            'facilities_room' => $request->input('facilities_room'),
            'Smoking_room' => $request->input('Smoking_room'),
            'Parking_room' => $request->input('Parking_room'),
            'bathroom_room' => $request->input('bathroom_room'),
            'price_room' => $request->input('price_room'),
            'amount_room' => $request->input('amount_room'),
            'room_img' => $room_img
        ]);
        $id_hotel = $request->input('id_hotel');
        echo "<script>location.assign('/room/$id_hotel')</script>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRoom($id_room)
    {
        Room::destroy($id_room);
        return back();
    }
}
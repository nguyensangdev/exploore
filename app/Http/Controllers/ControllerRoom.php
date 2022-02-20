<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Hotel;
use App\User;
use App\Room;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ControllerRoom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function create($id_hotel)
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

    public function store(Request $request)
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
        $request->file('room_img')->move('upload', $room_img);
        $id_hotel = $request->input('id_hotel');
        echo "<script>window.location.assign('/room/$id_hotel')</script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_room)
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
    public function edit(Request $request)
    {
        if ($request->hasFile('room_img')) {
            $file = $request->file('room_img');
            $room_img = $file->getClientOriginalName();
            $request->file('room_img')->move('upload', $room_img);
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
    public function destroy($id_room)
    {
        Room::destroy($id_room);
        return back();
    }
}
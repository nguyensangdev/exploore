<?php

namespace App\Http\Controllers;

use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerBookRoom extends Controller
{
    public function index()
    {
        $result = bookRoom::get();
        return view('admin/bookRoom/bookroom', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/bookRoom/addBookRoom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
//        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
//        $date_news = $date_time->toFormattedDateString();
        DB::table('book_room')->insert([
            'check_in' => $request->input('check_in'),
            'check_out' => $request->input('check_out'),
            'number_of_people' => $request->input('number_of_people'),
            'note' => $request->input('note'),
            'service' => $request->input('service'),

        ]);

        return redirect('bookRoom');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_room)
    {
        $geRoomById = bookRoom::find($id_room);
        return view('admin/bookRoom/updateBookRoom', ['result' => $geRoomById]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request)
    {
        $id_room = $request->input('id_room');
//        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
//        $date_news = $date_time->toFormattedDateString();
        DB::table('book_room')->where('id_room', $id_room)->update([
            'check_in' => $request->input('check_in'),
            'check_out' => $request->input('check_out'),
            'number_of_people' => $request->input('number_of_people'),
            'note' => $request->input('note'),
            'service' => $request->input('service'),
        ]);
        return redirect('bookRoom');
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
    public function destroy($id_room)
    {
        bookRoom::destroy($id_room);
        return redirect('bookRoom');
    }
}

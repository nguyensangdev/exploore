<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Hotel;
use App\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerDestination extends Controller
{
    public function index()
    {
        $result = Destination::get();
        return view('admin/destination/destination', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tour = Tour::get();
        $hotel= Hotel::get();
        return view('admin/destination/addDestination',['tour' => $tour,'hotel'=>$hotel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        DB::table('destination')->insert([
            'address' => $request->input('address'),
            'about' => $request->input('about'),
            'id_tour' => $request->input('id_tour'),
            'id_hotel' => $request->input('id_hotel'),
        ]);
        return redirect('destination');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_destination)
    {
        $getTourById = Destination::find($id_destination);
        return view('admin/destination/updateDestination', ['result' => $getTourById]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request)
    {
        $id_destination = $request->input('id_destination');
        DB::table('destination')->where('id_destination', $id_destination)->update([
            'address' => $request->input('address'),
            'about' => $request->input('about'),
            'id_tour' => $request->input('id_tour'),
            'id_hotel' => $request->input('id_hotel'),
        ]);
        return redirect('destination');
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
    public function destroy($id_destination)
    {
        Destination::destroy($id_destination);
        return redirect('destination');
    }
}

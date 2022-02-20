<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Tour;
use App\tourDay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tourDayController extends Controller
{
    public function index()
    {
        $result = tourDay::get();
        return view('admin/tourDay/tourDay', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tour = Tour::get();
        return view('admin/tourDay/addTourDay',['tour'=>$tour]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $file = $request->file('tour_day_img');
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();
        $tour_day_img = $file->getClientOriginalName();

        DB::table('tour_day')->insert([
            'id_tour' => $request->input('id_tour'),
            'tour_day_name' =>$request->input('tour_day_name'),
            'tour_day_content' => $request->input('tour_day_content'),
            'tour_day_img' => $tour_day_img,
        ]);
        $request->file('tour_day_img')->move('./public/upload', $tour_day_img);
        return redirect('tourDay');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_tour_day)
    {
        $tour = Tour::get();
        $getTourById = tourDay::find($id_tour_day);
        return view('admin/tourDay/updateTourDay', ['result' => $getTourById,'tour'=>$tour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request)
    {
        if ($request->hasFile('tour_day_img')) {
            $file = $request->file('tour_day_img');
            $tour_day_img = $file->getClientOriginalName();
            $request->file('tour_day_img')->move('./public/upload', $tour_day_img);
        } else {
            $tour_day_img = $request->input('img');
        }
        $id_tour_day = $request->input('id_tour_day');
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();
        DB::table('tour_day')->where('id_tour_day', $id_tour_day)->update([
            'id_tour' => $request->input('id_tour'),
            'tour_day_name' =>$request->input('tour_day_name'),
            'tour_day_content' => $request->input('tour_day_content'),
            'tour_day_img' => $tour_day_img,
        ]);
        return redirect('tourDay');
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
    public function destroy($id_tour_day)
    {
        tourDay::destroy($id_tour_day);
        return redirect('tourDay');
    }
}

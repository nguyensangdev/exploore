<?php

namespace App\Http\Controllers;

use App\District;
use App\Province;
use App\Tour;
use App\tourDay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class controllerTour extends Controller
{


    public function index()
    {
        $user = Auth::user();
        if($user->permissions == 0){
        $result = Tour::get();
        return view('admin/tour/tour', ['result' => $result]);
        }
        elseif($user->permissions == 1){
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->permissions == 0){
        $province = Province::get();
        return view('admin/tour/addTour',['province'=>$province]);
        }
        elseif($user->permissions == 1){
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if($user->permissions == 0){
        $file = $request->file('image_tour');
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();
        $image_tour = $file->getClientOriginalName();

        DB::table('tour')->insert([
            'tour_name' => $request->input('name_tour'),
            'number_of_people' =>$request->input('number_of_people'),
            'tour_description' => $request->input('tour_description'),
            'tour_price' => $request->input('tour_price'),
            'location' => $request->input('id_province'),
            'tour_img' => $image_tour,
            'duration_tour'=>$request->input('duration_tour'),
            'start_day'=>$request->input('start_day'),
            'status'=>$request->input('status'),
            'sale'=>$request->input('sale'),
        ]);
        $request->file('image_tour')->move('./public/upload', $image_tour);
        return redirect('tour');
        }
        elseif($user->permissions == 1){
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_tour)
    {
        $user = Auth::user();
        if($user->permissions == 0){
        $province = Province::get();
        $getTourById = Tour::find($id_tour);
        return view('admin/tour/updateTour', ['result' => $getTourById,'province'=>$province]);
        }
        elseif($user->permissions == 1){
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
        $user = Auth::user();
        if($user->permissions == 0){
        if ($request->hasFile('image_tour')) {
            $file = $request->file('image_tour');
            $image_tour = $file->getClientOriginalName();
            $request->file('image_tour')->move('./public/upload', $image_tour);
        } else {
            $image_tour = $request->input('img');
        }
        $id_tour = $request->input('id_tour');
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();
        DB::table('tour')->where('id_tour', $id_tour)->update([
            'tour_name' => $request->input('name_tour'),
            'number_of_people' =>$request->input('number_of_people'),
            'tour_description' => $request->input('tour_description'),
            'tour_price' => $request->input('tour_price'),
            'location' => $request->input('id_province'),
            'tour_img' => $image_tour,
            'duration_tour'=>$request->input('duration_tour'),
            'start_day'=>$request->input('start_day'),
            'status'=>$request->input('status'),
            'sale'=>$request->input('sale'),
        ]);
        return redirect('tour');
        }
        elseif($user->permissions == 1){
            return redirect('/');
        }
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
    public function destroy($id_tour)
    {
        $user = Auth::user();
        if($user->permissions == 0){
        Tour::destroy($id_tour);
        return redirect('tour');
        }
        elseif($user->permissions == 1){
            return redirect('/');
        }
    }
}

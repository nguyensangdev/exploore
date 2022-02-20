<?php

namespace App\Http\Controllers;

use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class controllerNews extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->permissions == 0){
                $user = Auth::user();
                $result = News::get();
                return view('admin/news/news', ['result' => $result,'user'=>$user]);
            }
            if($user->permissions == 1){
                return redirect('/');
            }
        }else {
            return redirect('/adminlogin');
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
        return view('admin/news/addNews');
            }elseif($user->permissions == 1){
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
        $file = $request->file('image_news');
        $image_news = $file->getClientOriginalName();

        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();

        DB::table('news')->insert([
            'id_account' => $request->input('id_account'),
            'news_title' => $request->input('title_news'),
            'news_img' => $image_news,
            'news_content' => $request->input('content_news'),
            'news_describes' => $request->input('describes_news'),
            'date_news' => $date_news,
        ]);
        $request->file('image_news')->move('./public/upload', $image_news);
        return redirect('news');
    }elseif($user->permissions == 1){
                return redirect('/');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_news)
    {
        $getTourById = News::find($id_news);
        return view('admin/news/updateNews', ['result' => $getTourById]);
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
        if ($request->hasFile('image_news')) {
            $file = $request->file('image_news');
            $image_news = $file->getClientOriginalName();
            $request->file('image_news')->move('./public/upload', $image_news);
        } else {
            $image_news = $request->input('img');
        }
        $id_news = $request->input('id_news');
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();
        DB::table('news')->where('id_news', $id_news)->update([
            'id_account' => $request->input('id_account'),
            'news_title' => $request->input('title_news'),
            'news_img' => $image_news,
            'news_content' => $request->input('content_news'),
            'news_describes' => $request->input('describes_news'),
            'date_news' => $date_news,

        ]);
        return redirect('news');
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
    public function destroy($id_news)
    {
        $user = Auth::user();
        if($user->permissions == 0){
        News::destroy($id_news);
        return redirect('news');
        }
        elseif($user->permissions == 1){
            return redirect('/');
        }
    }
}
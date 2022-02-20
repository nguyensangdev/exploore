<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerComment extends Controller
{
    public function index()
    {
        $result = Comment::get();
        return view('admin/comment/comment', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin/comment/addComment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_comment = $date_time->toFormattedDateString();
        $id_account = $request->input('id_account');
        // id =3 la khong co id user
        if ($id_account===3){
            DB::table('table_comment')->insert([
                'email' => $request->input('email'),
                'full_name' => $request->input('content_tour'),
                'phone' => $request->input('address'),
                'content_comment' => $request->input('address'),
                'type' =>  $request->input('address'),
                'date_comment'=>$date_comment,
            ]);
        }else{
            DB::table('table_comment')->insert([
                'id_account' => $request->input('id_account'),
                'content_comment' => $request->input('address'),
                'type' =>  $request->input('address'),
                'date_comment'=>$date_comment,
            ]);
        }
        return redirect('comment');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id_comment)
    {
        $getCommentById = Comment::find($id_comment);
        return view('admin/comment/updateComment', ['result' => $getCommentById]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(Request $request)
    {
        $id_comment = $request->input('id_comment');
        $date_time = Carbon::now('Asia/Ho_Chi_Minh');
        $date_news = $date_time->toFormattedDateString();
        DB::table('comment')->where('id_comment', $id_comment)->update([
            'id_comment' => $request->input('id_comment'),
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'comment_content' => $request->input('comment_content'),
            'date_comment' => $date_news,
            'status' => $request->input('status'),
            'id_hotel' => 1,
            'id_news' => 1,
            'id_tour' => 1
        ]);
        return redirect('comment');
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
    public function destroy($id_comment)
    {
        Comment::destroy($id_comment);
        return redirect('comment');
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\topic;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $topic_id = $id;
        $topic = topic::find($id);
        $comment = new Comment;
        $comment->topic_id = $topic_id;
        $comment->content = $request->input('text');
        $comment->save();
        return redirect("topics/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function testAjax()
    {
        // dd(1);
        // return "I am in";
    }

    // public function save_likedislike(Request $request){
    //     $data=new LikeDislike;
    //     $data->comment_id=$request->post;
    //     if($request->type=='like'){
    //         $data->like=1;
    //     }else{
    //         $data->dislike=1;
    //     }
    //     $data->save();
    //     return response()->json([
    //         'bool'=>true
    //     ]);
    // }
}

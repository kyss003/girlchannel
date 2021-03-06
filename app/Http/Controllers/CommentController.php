<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\comment;
use App\Models\comment_rely;
use App\Models\topic;
use App\Models\LikeDislike;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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
        $rules = [
            'text' => 'required',

        ];

        $messages = [

            'required' => ':attribute không được để trống',
        ];

        $arttributes = [
            'text' => 'Comment',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $arttributes);
        $validator->validate();
        
        $topic_id = $id;
        $topic = topic::where('id', $id)->get();
        $comment = new Comment;
        if($request->hasfile('addimage')) {
            $file = $request->file('addimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('public/image_comment/', $filename);
            $comment->image = $filename;
        }
        $comment->topic_id = $topic_id;
        $comment->content = $request->input('text');
        $comment->save();
        return redirect("topics/{$id}");
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

    public function save_likedislike_comment(Request $request){
        $data=new LikeDislike;
        $data->comment_id=$request->post;
        if($request->type=='like'){
            $data->like=1;
        }else{
            $data->dislike=1;
        }
        $data->save();
        return response()->json([
            'bool'=>true
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topic;
use App\Models\keyword;
use App\Models\comment;
use App\Models\comment_rely;
use App\Models\LikeDislike;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class Comment_relyController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $comment_id)
    {
        $topics = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->where('topics.id', $id)
                        ->get();
        $comments = Comment::where('id', $comment_id)->get();
        // dd($comments);
        $comments_rely = Comment_rely::where('comment_id', $comment_id)->get();
        // dd($comment_rely);
        $keywords_name = Topic::select('keywords.*')
                            ->join('keywords', 'topics.keyword_id', '=', 'keywords.id')
                            ->where('topics.keyword_id', 'keywords.id')
                            ->orwhere('topics.id', $id)
                            ->get();
        return view('comment_rely',[
            'topics' => $topics,
            'comments_rely' => $comments_rely,
            'comments' => $comments,
            'keywords_name' => $keywords_name,
        ]);
    }
    public function show_topic($id)
    {
        $topics = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->where('topics.id', $id)
                        ->get();
        // $comments = Comment::where('id', $comment_id)->get();
        $topic = Topic::where('id', $id)->get();
        // dd($comments);
        $comments_rely = Comment_rely::where('topic_id', $id)->get();
        // dd($comment_rely);
        $keywords_name = Topic::select('keywords.*')
                            ->join('keywords', 'topics.keyword_id', '=', 'keywords.id')
                            ->where('topics.keyword_id', 'keywords.id')
                            ->orwhere('topics.id', $id)
                            ->get();
        return view('comment_rely',[
            'topics' => $topics,
            'comments_rely' => $comments_rely,
            'topic' => $topic,
            'keywords_name' => $keywords_name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $comment_id)
    {
        $comment_id = $comment_id;
        $comment_rely = new Comment_rely;

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

        if($request->hasfile('addimage')) {
            $file = $request->file('addimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('public/image_comment/', $filename);
            $comment_rely->image = $filename;
        }
        $comment_rely->comment_id = $comment_id;
        $comment_rely->content = $request->input('text');
        $comment_rely->save();
        return redirect("comment_rely/{$id}/{$comment_id}");
    }
    public function update_topic(Request $request, $id)
    {
        $topic = $id;
        $comment_rely = new Comment_rely;
        if($request->hasfile('addimage')) {
            $file = $request->file('addimage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('public/image_comment/', $filename);
            $comment_rely->image = $filename;
        }
        $comment_rely->topic = $topic;
        $comment_rely->content = $request->input('text');
        $comment_rely->save();
        return redirect("comment_rely/{$id}");
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
    public function save_likedislike_comment_rely(Request $request){
        $data=new LikeDislike;
        $data->comment_rely_id=$request->post;
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

<?php

namespace App\Http\Controllers;

use App\Models\topic;
use App\Models\category;
use App\Models\keyword;
use App\Models\comment;
use App\Models\comment_rely;
use App\Models\LikeDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        $topic_keyword_id = Topic::select('keyword_id')->where('id', $id)->get();
        
        $comments = Comment::select(
                            DB::raw('count(comment_relies.id) as comment_rely_count'),
                            'comments.*')
                            ->LeftJoin('comment_relies','comments.id', '=', 'comment_relies.comment_id')
                            ->where('comments.topic_id', $id)
                            ->groupBy('comments.id')
                            ->orderByRaw('created_at ASC')
                            ->paginate(3);
        $topics = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->where('topics.id', $id)->get();
        $keywords_name = Topic::select('keywords.*')
                            ->join('keywords', 'topics.keyword_id', '=', 'keywords.id')
                            ->where('topics.keyword_id', 'keywords.id')
                            ->orwhere('topics.id', $id)
                            ->get();
        $related_topic = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                            ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                            ->groupBy('topics.id')
                            ->where('topics.keyword_id', '=', $topic_keyword_id )
                            ->orwhere('topics.id', $id)
                            ->orderByRaw('comment_count DESC')
                            ->limit(10)
                            ->get();
        $popular_topic_d = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                            ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                            ->groupBy('topics.id')
                            ->whereDate('topics.created_at', Carbon::today())
                            ->orderByRaw('comment_count DESC')
                            ->limit(10)
                            ->get();
        return view('topics', [
            'topics' => $topics,
            'comments' => $comments,
            'keywords_name' => $keywords_name,
            'popular_topic_d' => $popular_topic_d,
            'related_topic' => $related_topic
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
    public function destroy($id)
    {
        //
    }

    public function save_likedislike(Request $request){
        $data=new LikeDislike;
        $data->topic_id=$request->post;
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

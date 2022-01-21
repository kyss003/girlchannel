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

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('l, M D, Y');
        $topics = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->orderByRaw('created_at DESC')->paginate(3);

        $topics_new = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->orderByRaw('created_at DESC')->paginate(3);
        // dd($topics);
        
        // $topic_yes = Topic::

        $popular_topic_w = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->where('topics.created_at', '>', Carbon::today()->subDays(7))
                                ->orderByRaw('comment_count DESC')
                                ->limit(5)
                                ->get();
        $popular_topic_d = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->whereDate('topics.created_at', Carbon::today())
                                ->orderByRaw('comment_count DESC')
                                ->limit(5)
                                ->get();
        // $keywords = Keyword::all()->limit(10)
        $keywords = Keyword::select(DB::raw('count(topics.keyword_id) as count_top_keyword'), 'keywords.*')
                            ->leftJoin('topics', 'keywords.id', '=', 'topics.keyword_id')
                            ->groupBy('keywords.id')
                            ->orderByRaw('count_top_keyword DESC')
                            ->limit(10)
                            ->get();
                            // dd($keywords);
        $categories = Category::all();
        
        return view('rank', [
            'topics' => $topics,
            'categories' => $categories,
            'keywords' => $keywords,
            'now' => $now,
            'dt' => $dt,
            'popular_topic_w' => $popular_topic_w,
            'popular_topic_d' => $popular_topic_d,
            // 'comment_count' => $comment_count,
        ]);
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
}

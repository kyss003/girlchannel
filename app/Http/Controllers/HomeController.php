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
use Carbon\Carbon;


class HomeController extends Controller
{
    public function __construct() {

    }
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
        
        return view('home', [
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
        $topics = Topic::all();
        $categories = Category::all();
        $keywords = Keyword::all();
        return view('make_topic', [
            'topics' => $topics,
            'categories' => $categories,
            'keywords' => $keywords,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $topic = new topic;
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('public/image/', $filename);
            $topic->image = $filename;
        }
        if($request->hasfile('image_content')) {
            $file = $request->file('image_content');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('public/image_content/', $filename);
            $topic->image_content = $filename;
        }
        
        $topic->title = $request->input('title');
        $topic->content = $request->input('text');
        $topic->category_id = $request->input('category');
        $topic->keyword_id = $request->input('keyword');

        
        $topic->save();
        return redirect('make_topic');
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

        $comment_id = Comment::select('id')
                            ->where('topic_id', $id)
                            ->get();

        // $comments_rely_count = Comment_rely::select(DB::raw('count(id) as comment_rely_count'))
        //                                     ->where('comment_id', '=', $comment_id)
        //                                     ->get();
                                            // dd($comments_rely_count);
        //,'comment_relies.image as comment_relies_image','comment_relies.content as comment_relies_content','comment_relies.created_at as comment_relies_created_at','comment_relies.id as comment_relies_id'
        $comments = Comment::select(DB::raw('count(comment_relies.id) as comment_rely_count'),'comments.*')
                            ->leftJoin('comment_relies','comments.id', '=', 'comment_relies.comment_id')
                            ->where('comments.topic_id', $id)
                            ->orderByRaw('created_at ASC')
                            // ->orderByRaw('comment_relies_created_at ASC')
                            ->paginate(3);
                            // dd($comments);
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

    public function upload(Request $request) 
    {
        
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

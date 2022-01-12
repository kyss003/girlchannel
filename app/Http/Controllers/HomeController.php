<?php

namespace App\Http\Controllers;

use App\Models\topic;
use App\Models\category;
use App\Models\keyword;
use App\Models\comment;
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
        //,DB::raw('count(id) as comment_count')
        $topics = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->join('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->orderByRaw('topics.created_at DESC')->paginate(2);
        // $topics = Comment::selectRaw('count(id) as comment_count, topic_id')
        //                     ->groupBy('topic_id')
        //                     ->get();
        // dd($topics);
        
        $popular_topic_w = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->join('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->groupBy(DB::raw('WEEK(topics.created_at)'))
                                // ->groupBy(function($date) {
                                //     return Carbon::parse($date->topics.created_at)->format('W');
                                // })
                                ->orderByRaw('comment_count DESC')
                                ->limit(5)
                                ->get();
                                
                                // ->groupBy(function($date) {
                                //     return Carbon::parse($date->check_in)->format('W');
                                // })->get();
                                // ->oderBy(DB::raw('COUNT(comment.topic_id)'))->get();
                                // dd($popular_topic_w);
        $popular_topic_d = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                // ->withCount('comments.topic_id')
                                ->join('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->groupBy(DB::raw('DAY(topics.created_at)'))
                                ->orderByRaw('comment_count DESC')
                                ->limit(5)
                                // ->withCount('id')
                                ->get();
                                
                                // ->groupBy(function($date) {
                                //     return Carbon::parse($date->check_in)->format('W');
                                // })->get();
                                // ->oderBy(DB::raw('COUNT(comment.topic_id)'))->get();
                                // dd($popular_topic_w);
        $categories = Category::all();
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        return view('home', [
            'topics' => $topics,
            'categories' => $categories,
            'dt' => $dt->toDateString(),
            'popular_topic_w' => $popular_topic_w,
            'popular_topic_d' => $popular_topic_d,
            
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
        
        $topic->title = $request->input('title');
        $topic->content = $request->input('text');
        $topic->category_id = $request->input('category');
        $topic->keyword_id = $request->input('keyword');

        
        $topic->save();
        return redirect('make_topic');



        // $make_topic = Topic::create($request->input());
        // if ($make_topic) {
        //     return redirect('/');
        // } 


        // $request->validate([
        //     'title' => 'required',
        //     'text' => 'required'
        // ]);

        // $query = DB::table('topics')->insert([
        //     'title'=>$request->input('title'),
        //     'content'=>$request->input('text')
        // ]);
        // if($query) {
        //     return redirect('add');
        // }

        //image

        // $validatedData = $request->validate([

        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        //    ]);

        //    $name = $request->file('image')->getClientOriginalName();
        //    $path = $request->file('image')->store('public/image');
   
        //    $save = new topic;
        //    $save->image = $path;
        //    dd($save);
        //    $save->save();

        //    return redirect('make_topic')->with('status', 'Image Has been uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::where('topic_id', $id)->get();
        $topics = Topic::where('id', $id)->get();
        return view('topics', [
            'topics' => $topics,
            'comments' => $comments,
        ]);
    }
    // public function Homeshow($id)
    // {
        // $comment_count = Comment::selectRaw('count(id) as comment_count, topic_id')
        //                     ->groupBy('topic_id')
        //                     ->where()
        //                     ->get();
    //     return view('home', [
    //         'comment_count' => $comment_count,
    //     ]);
    // }

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

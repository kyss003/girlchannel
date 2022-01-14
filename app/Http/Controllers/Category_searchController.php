<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Category_searchController extends Controller
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
    public function show($id)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $topics_categories = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.id', 'topics.image', 'topics.title', 'topics.content', 'topics.created_at', 'topics.updated_at','comments.topic_id')
                                    ->join('comments', 'topics.id','=','comments.topic_id')
                                    ->groupBy('topics.id')
                                    ->where('category_id', $id)
                                    ->orderByRaw('created_at DESC')->paginate(3);
                                    // ->get();
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by=="c") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->orderByRaw('comment_count DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } elseif($sort_by=="n") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->orderByRaw('topics.created_at DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } 
            return view('category_seach',[
                'dt' => $dt,
                'sort_by' => $sort_by,
                'search_text'=>$search_text,
                'countries'=>$countries,
                'popular_topic_w' => $popular_topic_w,
                'popular_topic_d' => $popular_topic_d,
                'categories' => $categories,
                // 'countries_sortBy' => $countries_sortBy,
            ]);
        }
        if(isset($_GET['date'])){
            $date_by = $_GET['date'];
            if($date_by=="a") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->orderByRaw('comment_count DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } elseif($date_by=="w") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->where('topics.created_at', '>', Carbon::today()->subDays(7))
                                ->orderByRaw('topics.created_at DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } elseif($date_by=="m") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->where('topics.created_at', '>', Carbon::today()->subDays(30))
                                ->orderByRaw('topics.created_at DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } elseif($date_by=="y") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->where('topics.created_at', '>', Carbon::today()->subYear(1))
                                ->orderByRaw('topics.created_at DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } 
            return view('category_seach',[
                
                'date' =>$date_by,
                'search_text'=>$search_text,
                'countries'=>$countries,
                'popular_topic_w' => $popular_topic_w,
                'popular_topic_d' => $popular_topic_d,
                'categories' => $categories,
            ]);
        }
        $categories = Category::all();
        $categories_name = Category::where('id', $id)->get();
        return view('category_search', [
            'dt' => $dt,
            'categories' => $categories,
            'categories_name' => $categories_name,
            'topics_categories' => $topics_categories,
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
}

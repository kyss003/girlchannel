<?php

namespace App\Http\Controllers;

use App\Models\topic;
use App\Models\comment;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public $sorting;
    public $date;
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
        
        if(isset($_GET['query'])){
            $this->sorting = "most-newest";
            $this->date = "all";
            $categories = Category::all();
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
            $search_text = $_GET['query'];
            $countries = DB::table('topics')
                            ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                            ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                            ->groupBy('topics.id')
                            ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
            // $countries_sortBy = $countries->sortByDesc('comment_count')->get();
            $countries->appends($request->all());
            
            

            
            
        }
        // if(isset($_GET['sort_by'])){
        //     $sort_by = $_GET['sort_by'];
        //     if($sort_by=="c") {
        //         $countries_sortBy = $countries->sortByDesc('comment_count')->get();
        //         $countries_sortBy->appends($request->all());
        //     } else {
        //         $countries_sortBy = $countries->sortByDesc('created_at')->get();
        //         $countries_sortBy->appends($request->all());
        //     }
        // }
        return view('search',[
            'search_text'=>$search_text,
            'countries'=>$countries,
            'popular_topic_w' => $popular_topic_w,
            'popular_topic_d' => $popular_topic_d,
            'categories' => $categories,
            // 'countries_sortBy' => $countries_sortBy,
        ]);
        
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

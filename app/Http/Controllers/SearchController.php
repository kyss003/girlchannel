<?php

namespace App\Http\Controllers;

use App\Models\topic;
use App\Models\comment;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        if(isset($_GET['query'])){
            
            $this->sorting = "most-newest";
            $this->date = "all";
            $categories = Category::all();
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
            $search_text = $_GET['query'];
            $countries = DB::table('topics')
                            ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                            ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                            ->groupBy('topics.id')
                            ->orderByRaw('topics.created_at DESC')
                            ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
            // $countries_sortBy = $countries->sortByDesc('comment_count')->get();
            $countries->appends($request->all());
        }
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
                // $countries_sortBy = DB::table('topics')
                //                         ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                //                         ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                //                         ->groupBy('topics.id')
                //                         ->sortBy('comment_count', 'DESC')->get();
                

            } elseif($sort_by=="n") {
                $countries = DB::table('topics')
                                ->select(DB::raw('count(comments.id) as comment_count'),'topics.*', 'comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->orderByRaw('topics.created_at DESC')
                                ->where('title', 'LIKE', '%'.$search_text.'%')->paginate(2);
                $countries->appends($request->all());
            } 
            return view('search',[
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
            return view('search',[
                
                'date' =>$date_by,
                'search_text'=>$search_text,
                'countries'=>$countries,
                'popular_topic_w' => $popular_topic_w,
                'popular_topic_d' => $popular_topic_d,
                'categories' => $categories,
            ]);
        }

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

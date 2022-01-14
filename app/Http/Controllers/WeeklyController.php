<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topic;
use App\Models\category;
use App\Models\keyword;
use App\Models\comment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $popular_topic_w = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                                ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                                ->groupBy('topics.id')
                                ->where('topics.created_at', '>', Carbon::today()->subDays(7))
                                ->orderByRaw('comment_count DESC')
                                ->paginate(3);
        $categories = Category::all();
        return view('weekly',[
            'dt' => $dt,
            'popular_topic_w' => $popular_topic_w,
            'categories' => $categories,
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

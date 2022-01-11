<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Category_searchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $topics = Topic::all();
        // $categories = Category::all();
        // return view('category_search', [
        //     'categories' => $categories,
        //     'topics' => $topics,
        // ]);
        // $topics_categories = Topic::orderByRaw('updated_at - created_at DESC')->paginate(2);
        // return view('category_search', [
        //     'topics_categories' => $topics_categories,
        // ]);
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
        $topics_categories = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.id', 'topics.image', 'topics.title', 'topics.content', 'topics.created_at', 'topics.updated_at','comments.topic_id')
                                    ->join('comments', 'topics.id','=','comments.topic_id')
                                    ->groupBy('topics.id')
                                    ->where('category_id', $id)
                                    ->orderByRaw('topics.created_at DESC')->paginate(1);
                                    // ->get();
        $categories = Category::all();
        $categories_name = Category::where('id', $id)->get();
        return view('category_search', [
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

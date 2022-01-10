<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\topic;
use Illuminate\Http\Request;

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
        $topics_categories = Topic::where('category_id', $id)->get();
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

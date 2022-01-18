<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topic;
use App\Models\keyword;
use App\Models\comment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Topic_imageController extends Controller
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
        $keywords_name = Topic::select('keywords.*')
                            ->join('keywords', 'topics.keyword_id', '=', 'keywords.id')
                            ->where('topics.keyword_id', 'keywords.id')
                            ->orwhere('topics.id', $id)
                            ->get();
                            // dd($keywords_name);
        $topics = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->where('topics.id', $id)->get();
                        // dd($topics);
        $comments = Comment::where('topic_id', $id)->orderBy('created_at', 'DESC')->get();
                        // dd($comments);
        return view('topic_image',[
            'keywords_name' => $keywords_name,
            'topics' => $topics,
            'comments' => $comments,
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

    // public function load_data(Request $request)
    // {
    //     if($request->ajax())
    //     {
    //         if ($request->id > 0)
    //         {
    //             $data = DB::table('comments')
    //                         ->where('id','<', $request->id)
    //                         ->orderBy('id', 'DESC')
    //                         ->limit(5)
    //                         ->get();
    //         }
    //         else
    //         {
    //             $data = DB::table('comments')
    //                         ->orderBy('id', 'DESC')
    //                         ->limit(5)
    //                         ->get();
    //         }
    //         $output = '';
    //         $last_id = '';
    //         if(!$data->isEmpty)
    //         {
    //             foreach($data as $row)
    //             {
    //                 $output .= '
    //                 <div class="head-area">
    //                     <img src="https://up.gc-img.net/post_img_web/2021/12/Wyc2SH27qWydrqZ_21723_s.jpeg" class="img">
    //                     <h1>
    //                         <font>いしだ壱{{ $topic->title }}</font>
    //                     </h1>
    //                     <p class="comment">
    //                         <span class="icon-comment">
    //                             <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
    //                         </span>
    //                         <font>
    //                             <span>{{ $topic->comment_count }}</span>
    //                             <span class="datetime">{{ $topic->created_at }}</span>
    //                         </font>
    //                     </p>
    //                 </div>
    //                 '
    //             }
    //         }
    //         else
    //         {
    //             $output .= '
    //             <div id="load_more" name="load_more_button" class="btn btn-moderate see-more">
    //                 No Data Found
    //             </div>
    //             ';
    //         }
    //     }
    // }
}

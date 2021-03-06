<?php

namespace App\Http\Controllers;

use App\Models\topic;
use App\Models\category;
use App\Models\keyword;
use App\Models\comment;

use App\Models\LikeDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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
                        ->orderByRaw('comment_count DESC')->paginate(3);
        $topics_new = Topic::select(DB::raw('count(comments.id) as comment_count'),'topics.*','comments.topic_id')
                        ->leftJoin('comments', 'topics.id','=','comments.topic_id')
                        ->groupBy('topics.id')
                        ->orderByRaw('created_at DESC')->paginate(3);

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
        $keywords = Keyword::select(DB::raw('count(topics.keyword_id) as count_top_keyword'), 'keywords.*')
                            ->leftJoin('topics', 'keywords.id', '=', 'topics.keyword_id')
                            ->groupBy('keywords.id')
                            ->orderByRaw('count_top_keyword DESC')
                            ->limit(10)
                            ->get();
        $categories = Category::all();
        
        return view('home', [
            'topics' => $topics,
            'categories' => $categories,
            'keywords' => $keywords,
            'now' => $now,
            'dt' => $dt,
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

    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $topic = new topic;
        $rules = [
            'title' => 'required|max:120',
            'text' => 'required',
            'category' => 'required',
            'keyword' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required',
        ];

        $messages = [

            'required' => ':attribute kh??ng ???????c ????? tr???ng',

            'max' => ':attribute kh??ng qu?? 120 k?? t???',

            'mimes' => ':attribute sai ?????nh d???ng',

            // 'title.required' => 'Title kh??ng ???????c ????? tr???ng',
            
            // 'text.required' => 'Content kh??ng ???????c ????? tr???ng',
            
            // 'category.required' => 'Category kh??ng ???????c ????? tr???ng',
            
            // 'keyword.required' => 'Keyword kh??ng ???????c ????? tr???ng',
        ];

        $arttributes = [
            'title' => 'Title',
            'text' => 'Text',
            'category' => 'Category',
            'keyword' => 'Keyword',
            'image' => '???nh',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $arttributes);
        $validator->validate();
        // if($validator->fails())
        // {
        //     return 'Validate fails';
        // }else {
        //     return 'Validate success';
        // }
        // dd($validator);



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
    
}

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
        $topics = Topic::orderBy('created_at','DESC')->paginate(2);
        $categories = Category::all();
        
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        return view('home', [
            'topics' => $topics,
            'categories' => $categories,
            'dt' => $dt->toDateString(),
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
        $comments = Comment::all();
        $topics = Topic::where('id', $id)->get();
        return view('topics', [
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

    public function upload(Request $request) 
    {
        // $file = $request->file('add');
        // dd($file);
        
        // $fileName = $file->getClientOriginalName();

        
        // $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        // $fileExtension = pathinfo($file->getClientOriginalName(), PATHINFO_FILeExtension);

        // $encryptedFilename = md5($fileName);
        // $file->storeAs('topic-1', $fileName, 'image');




        // $validatedData = $request->validate([

        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        // ]);

        // $name = $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->store('public/image');
        

        // $save = new Photo;
        // $save->name = $name;
        // $save->path = $part;

        // $save->save();
        // return redirevt('make_topic');








        // $imageName = time().'.'.$request->image->extension();  
     
        // $request->image->move(public_path('images'), $imageName);
  
        // /* Store $imageName name in DATABASE from HERE */
    
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName); 
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

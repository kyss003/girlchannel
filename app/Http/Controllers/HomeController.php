<?php

namespace App\Http\Controllers;

use App\Models\topic;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $topics = Topic::all();
        $categories = Category::all();
        return view('home', [
            'topics' => $topics,
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
        return view('make_topic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $make_topic = Topic::create($request->input());
        // if ($make_topic) {
        //     return redirect('/');
        // } 
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        $query = DB::table('topics')->insert([
            'title'=>$request->input('title'),
            'content'=>$request->input('text')
        ]);
        if($query) {
            return redirect('add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topics = Topic::where('id', $id)->get();
        return view('topics', [
            'topics' => $topics
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

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/image');

        $save = new Photo;
        $save->name = $name;
        $save->path = $part;

        $save->save();
        return redirevt('make_topic_upload_image');








        // $imageName = time().'.'.$request->image->extension();  
     
        // $request->image->move(public_path('images'), $imageName);
  
        // /* Store $imageName name in DATABASE from HERE */
    
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName); 
    }
}

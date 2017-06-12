<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section ;
use App\Post ;
use Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('admin.all_news')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sections = Section::all();
        return view('admin.add_post')->with('sections',$sections);
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
          $post = new Post ;
        if ($request->ajax()) {

            $this->validate($request, [
                'post_headline'  =>'required',
               //'post_photo' => 'image',
                'post_category' =>'required',
                'post_content' =>'required',
                'post_tags' =>'required',
            ]);
        if ($request->input('post_photo') == "No Photo") {

        $section =Section::find($request->input('post_category'));
        $cat_name = $section->name ; 
      

        $post->post_headline = $request->input('post_headline');
        $post->post_categotyid = $request->input('post_category');
        $post->post_category = $cat_name ;
         $post->post_content = $request->input('post_content');
        $post->post_tags = $request->input('post_tags');
        $post->post_photo = "No Photo" ;

        if ($request->input('post_video')) {
            $cut = strpos($request->input('post_video') ,'=');
            $key = substr($request->input('post_video') , $cut+1) ;
           $post->post_video =$key;
           $post->save();
           $posts = Post::all();
           Session::flash('success', 'The News has been saved successfully');
           return view('admin.all_news')->with('posts',$posts);
           }else{
           $post->post_video ="No Video";
           $post->save();
           $posts = Post::all();
           Session::flash('success', 'The News has been saved successfully');
           return view('admin.all_news')->with('posts',$posts);
        }

            }else{   
        $imageName = time().'.'.$request->file('post_photo')->getClientOriginalExtension();
        $image =  $request->file('post_photo')->move(public_path('images'), $imageName);

        $section =Section::find($request->input('post_category'));
        $cat_name = $section->name ; 
      

        $post->post_headline = $request->input('post_headline');
        $post->post_categotyid = $request->input('post_category');
        $post->post_category = $cat_name ;
         $post->post_content = $request->input('post_content');
        $post->post_tags = $request->input('post_tags');
        $post->post_photo = $imageName ;

        if ($request->input('post_video')) {
            $cut = strpos($request->input('post_video') ,'=');
            $key = substr($request->input('post_video') , $cut+1) ;
           $post->post_video =$key;
           $post->save();
           $posts = Post::all();
           Session::flash('success', 'The News has been saved successfully');
           return view('admin.all_news')->with('posts',$posts);
           }else{
           $post->post_video ="No Video";
           $post->save();
           $posts = Post::all();
           Session::flash('success', 'The News has been saved successfully');
           return view('admin.all_news')->with('posts',$posts);
        }





        }
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

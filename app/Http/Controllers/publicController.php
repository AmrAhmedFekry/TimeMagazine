<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section ;
use App\Ad ;
use App\Post ;
use App\Http\Requests;

class publicController extends Controller
{
    //
    public function index(){
    	 $sections = Section::all();
    	 $featured_posts = Post::where("make_featured" ,'=',1)->get();
         $breaking_posts = Post::where("make_breaking" ,'=',1)->get();
         $top_stories  = Post::orderBy('views' ,'asc')->take(8)->get();
         $recents = Post::orderBy('created_at' , 'desc')->take(3)->get();
         $posts = Post::all();
         $featured_posts = Post::where("make_featured" ,'=',1)->get();
         $ads = Ad::all();



    	 $ads = Ad::all();
return view('public.home')->with('sections',$sections)->with('ads' ,$ads)->with('featured_posts',$featured_posts)->with('breaking_posts',$breaking_posts)->with('top_stories' , $top_stories)->with('recents',$recents)->with('posts' , $posts)->with('ads',$ads);
    }


public function featured()
{
$posts = Post::all();
return view ('admin.featured')->with('posts' ,$posts);
}


public function make_featured(Request $request)
{

$post = Post::find($request->input('id'));

if ($post->make_featured == 1 ) {
$post->make_featured = 0 ;
$post->save();
echo("done");
}else{
$post->make_featured = 1 ;	
$post->save();
echo("done");
}

}

public function breaking(){
	$posts = Post::all();
	return view ('admin.breaking')->with('posts' , $posts);
}


public function make_breaking (Request $request)
{
$post = Post::find($request->input('id'));
if ($post->make_breaking == 1) {
$post->make_breaking = 0 ;
$post->save();
}else{
$post->make_breaking = 1 ;
$post->save();
}


}


public function view_post($id){
    $ads = Ad::all();
    $sections = Section::all();
    $breaking_posts = Post::where("make_breaking" ,'=',1)->get();
    $post = Post::find($id);
    $section_id = $post->post_categotyid;
             $recents = Post::orderBy('created_at' , 'desc')->take(3)->get();
    $section_posts = Post::where("post_categotyid" ,'=',$section_id)->take(3)->get();

$old_views = $post->views ;
$new_views = $old_views +1 ;
$post->views = $new_views ;
$post->save();
    return view("public.post_view")->with('sections',$sections)->with('ads' ,$ads)->with('breaking_posts',$breaking_posts)->with("post",$post)->with('section_posts', $section_posts)->with('recents',$recents);
}



}

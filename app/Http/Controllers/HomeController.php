<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{

 /* POST */

 public function update($id, Request $request){
   $post = Post::where('id', $id)->firstOrFail();

   $post->update($request->only(['description','title', 'soutitre','content1', 'content2', 'image']));
   $post->slug = str_replace(' ','-',$post->title);
   $post->slug = str_replace('\'','-',$post->slug);
   $post->update();
   return redirect()->back()->with('success', 'Votre article a été mis à jour !'); 
  // return redirect()->action('HomeController@index');
 } 



public function create(){
 $post = new Post;
 return view('post-edit', compact('post'));
 //  return view('post-edit')->with('post',$post)->with('success', 'Vous avez créé votre article !');
}

public function view($slug){

 $users = User::all();
 $comments = Comment::all();
 $post = Post::where('slug', $slug)->firstOrFail();

 return view('post')->with('post',$post)->with('comments',$comments)->with('users',$users);

}

public function delete($id){
 Post::destroy($id);
 return redirect()->action('HomeController@index');
}


public function edit($id){
 $post = Post::where('id', $id)->firstOrFail();

 return view('post-edit', compact('post'));
}


public function insert(Request $request){

  $post = new Post;
  $inputs = $request->input();
  $post = Post::create($inputs);

  return redirect()->back()->with('success', 'Vous avez créé votre article !');
}


/* COMMENTS */

public function ccom(Request $request){


  $comments = new Comment;
  $inputs = $request->input();
  $comments = Comment::create($inputs);


  return redirect()->back();
}


public function comd($id){
  Comment::destroy($id);
  return redirect()->back();
}



public function comdelete($id){
  Comment::destroy($id);
  return redirect()->back();
}



public function delog()
{
  Auth::logout();
  return view('welcome');
  
}

public function __construct()
{
  $this->middleware('auth');
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $users = User::all();
      $posts = Post::all();
      return view('posts')->with('posts',$posts)->with('users',$users);
    }



/* UPLOAD IMAGE */

 public function imageUpload()

    {

        return view('imageUpload');

    }

   public function imageUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        

        $imageName = request()->image->getClientOriginalName();

   //.'.'.request()->image->getClientOriginalExtension()

        request()->image->move(public_path('images'), $imageName);

  

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }




}




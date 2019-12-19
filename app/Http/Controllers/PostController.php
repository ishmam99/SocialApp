<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Post;
use App\User;
use DB;
use App\Profile;
use Image;
class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $posts_per_page = 3;
    public function index(Request $request)
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
        $friends=Profile::whereIn('id',$users)->with('user')->get();
        $posts=Post::whereIn('user_id',$users)->with('user')->latest()->paginate($this->posts_per_page);
        if($request->ajax()) {
            return [
                'posts' => view('posts.ajax.index')->with(compact('posts'))->render(),
                'next_page' => $posts->nextPageUrl()
            ];
        }
        return view('posts.index',compact('people','posts','friends'));
    }
    public function test(Request $request)
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
        $friends=Profile::whereIn('id',$users)->with('user')->get();
        $posts=Post::whereIn('user_id',$users)->with('user')->latest()->paginate($this->posts_per_page);
        if($request->ajax()) {
            return [
                'posts' => view('posts.ajax.index')->with(compact('posts'))->render(),
                'next_page' => $posts->nextPageUrl()
            ];
        }
        return view('layouts.test',compact('people','posts','friends'));
    }

    public function friend()
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
        $friends=Profile::whereIn('id',$users)->with('user')->get();
       
        return view('newsfeed.friends',compact('people','friends'));
    }

    public function follower()
    {
        $users=auth()->user()->following()->pluck('profiles.user_id');
        $friends=Profile::whereIn('id',$users)->with('user')->get();
        $follower=auth()->user()->profile->followers->all();
        //dd($follower);
        $people=Profile::whereNotIn('id',$users)->with('user')->get();
     //   $friends=Profile::whereIn('id',$users)->with('user')->get();
       
        return view('newsfeed.follower',compact('people','friends','follower'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $data)
    {
        $data= request()->validate([
          'caption'=>'required',
          'image'=>'required | image',
        ]);


        
        // $imagePath= request('image')->store('uploads','public');
        // $image=Image::make($imagePath);
        $originalImage=request('image');
        $name=$originalImage->getClientOriginalName();
        $extension=$originalImage->getClientOriginalExtension();
       
        $name=time(); 
     
        $fullname=$name.'.'.$extension;
        $thumbnailImage = Image::make($originalImage);
        $originalPath = public_path().'/uploads/';
       
        $thumbnailImage->save($originalPath.$fullname);
        $thumbnailImage->resize(1200,1200);
        auth()->user()->posts()->create([
          'caption'=> $data['caption'],
          'image'=> $fullname
          ]);

          return redirect('/profile/'.auth()->user()->id);
    }
    public function show( \App\Post $post)
    {
        return view('posts.show' , compact('post'));
    }
    public function liked(Request $request){
        $post_id=$request['postId'];
        $is_like=$request['isLike']=='true';
        $update=false;
        $post=Post::find('post_id');

        if(!$post)
        {
            return null;
        }
       

        $user=Auth::user();
        $like=$user->likes()->where('post_id',$post_id)->first();
        if($like){
            $already_like=$like->like;
            $update=true;
            if($already_like==$is_like){
                $like->delete();
                return null;
            }
         } else{
                $like=new Like();

            }
            $like->like=$is_like;
            $like->user_id=$user->id;
            $like->post_id=$post->id;

            if($update){
                $like->update();

            }
            else{
                $like->save();
            }
            return null;
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tags;

class PostsController extends Controller
{
    //
    public function detail($id){
        $post=Post::find($id);
        return view('posts.detail',['post'=>$post]);
    }
    public function kategori($kategori){
        if($kategori=='all'){
            $posts=Post::orderBy('created_at','desc')->paginate(8);
        }else{
            $posts=Post::where('kategori','=',$kategori)->orderBy('created_at','desc')->paginate(8);
        }        
        return view('posts.index',['posts'=>$posts]);
    }
    public function tags($id){
        $tags=Tags::find($id);
        $posts=Post::withAllTags([$tags->name])->orderBy('created_at','desc')->paginate(8);
        return view('posts.index',['posts'=>$posts]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('post.posts', ['posts' => $posts]);
    }
   public function create()
   {
       return view('post.create');
   }
   
   public function store(Request $request)
   {
 
       $post = new Post;
   
       $post->nama_apk = $request->nama_apk;
       $post->versi = $request->versi;
       $post->nomor_sk = $request->nomor_sk;
       $post->tahun_sk = $request->tahun_sk;
       $post->body = $request->body;
       $post->user_id = Auth::user()->id;
   
       $post->save();

       return back();

   }

}
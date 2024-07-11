<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index($id){
        // $post = \DB::table('posts')->where("id",$id)->first();
        $post = Post::where("id",$id)->first(); 
        if(!$post){
            abort(404);
        }

        $data = [
            "post" => $post
        ];
        return view('post.index', $data);
    }
}

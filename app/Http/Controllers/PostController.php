<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{
    public function main(){
        $posts = Post::all();
        return view('/main',['posts' => $posts]);
    }

    public function post($post){
        $pst = Post::find($post);
        return view('/post', ['post'=>$pst]);
    }

    
    public function admin(){
        $posts = Post::all();
        return view('/admin',['posts' => $posts]);
    }

    public function addOrDelete(Request $request) {

        if ($request->input('add') != ""){
            Post::create([
                "name"=> $request->name
            ]);
        }
        else{

            Post::where('name', $request->delete)->delete();

        }
        return $this->admin();
    }

    public function allComments($id){
        $comments = Comment::where('post_id', $id)->get();
        return view('/comments',['comments' => $comments]);
    }

    public function deleteCom(Request $request, $id){
        Comment::where('id', $request->delete)->delete();
        return $this->allComments($id);
    }

    
    public function addComm(Request $request, $post){
    
        Comment::create([
            'user_name' => $request->user_name,
            'body' => $request->body,
            'post_id' => $post
        ]);

    return $this->post($post);
}

}
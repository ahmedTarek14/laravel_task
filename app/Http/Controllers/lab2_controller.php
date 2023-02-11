<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Post;
class lab2_controller extends Controller
{

    function add_form(){ //create
        return view('add_post');
    }

    function insert() //store
    {
        $rows = request()->all();  # $_POST
        array_shift($rows);  # remove _csrf
//        dd($posts_details);
        DB::table('posts')->insert($rows);
        return to_route('posts.view');
    }

    function show() //index
    {
        $rows = Post::all();
    //    dd($rows);
        return view("view_post", $data=['rows'=>$rows]);
    }


    function details($id) //show
    {
        $rows = DB::table('posts')->where('id', $id)->first();

        if ($rows){
            // dump($rows);
            return view("details_post", $data=['rows'=>$rows]);

        }else{
            return abort(404);
        }
    }

    function delete($id)
    {
        $deleted = DB::table('posts')->where('id', $id)->delete();
        // $rows = DB::table('posts')->get();

        if ($deleted){
            // dump($rows);
            // return view("view_posts", $data=['rows'=>$rows]);
            return to_route("posts.view");

        }else{
            return abort(404);
        }
    }

    function edit($id){
        $post = Post::findOrFail($id);
        // dd($post);
        return view('edit_post', $data=['posts'=>$post]);
    }

    function update($id){
        $post = Post::findOrFail($id);
        $update_post = request()->all();
        $post->title = $update_post["title"];
        $post->post_by = $update_post["post_by"];
        $post->date = $update_post["date"];
        $post->save();
        //return "updated";
       return to_route("posts.view");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rows = Post::all();
        //    dd($rows);
        $rows = Post::paginate(1);
        return view("view_post", $data=['rows'=>$rows]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'post_by' => 'required',
            'posted_at' => 'required'
        ],
            [
                'title.required' => "enter right title"
            ]);
        // dd($request);
            Post::create($request->all());
            // $post_details = request()->all();  # $_POST
            // array_shift($post_details);  # remove _csrf
            // $post = new Post();
            // $post->title = $post_details["title"];
            // $post->post_by = $post_details["post_by"];
            // $post->posted_at= $post_details["posted_at"];
            // $post->save();
            return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("details_post", $data=['rows'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('edit_post', $data=['posts'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // $update_post = request()->all(); // all in form
        // $post->title = $update_post["title"]; //database = form
        // $post->post_by = $update_post["post_by"];
        // $post->posted_at = $update_post["date"];
        // $post->save();
        //return "updated";
        $request->validate([
            'title' => 'required',
            'post_by' => 'required',
            'posted_at' => 'required'
        ],
            [
                'title.required' => "enter right title"
            ]);
        $post->update($request->all());
       return to_route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route("posts.index");
    }
}

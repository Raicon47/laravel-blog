<?php

namespace App\Http\Controllers;

use Canvas\Models\Post;
use Canvas\Models\Topic;
use Illuminate\Http\Request;
use Canvas\Events\PostViewed;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'DESC')->get();
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $index_post = Post::orderBy('created_at', 'DESC')->first();

        return view('welcome', compact('topics', 'posts', 'index_post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $topics = Topic::orderBy('created_at', 'DESC')->get();
        // $post = Post::where('slug', $slug)->first();
        $post = Post::with('user', 'tags', 'topic', 'views')->where('slug', $slug)->first();

        event(new PostViewed($post));

        return view('post', compact('topics', 'post'));
        
    }

    public function topic($slug) {

        $topics = Topic::orderBy('created_at', 'DESC')->get();
        $topic = Topic::where('slug', $slug)->first();

        return view('topic', compact('topics', 'topic'));
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

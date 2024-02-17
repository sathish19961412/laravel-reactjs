<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $posts=Post::all();
       return response(['data'=>$posts],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','body']);
        Post::create($data);
        return response(['message'=>'Post Created Successfully'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
       return response(['data'=>$post],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Post $post)
    {
       $data=$request->only(['title','body']);
       $post->update($data);
       return response(['message'=>'Post Updated Successfully'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response(['message'=>'Post Deleted Successfully'],200);
    }
}

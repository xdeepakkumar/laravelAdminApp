<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categories::all();
        return view('posts.create')->with('cats', $cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cat_name'=> 'required',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $post = new Post();
        $post->cat_name = $request->input('cat_name');
        $post->post_title = $request->input('title');
        $post->post_slug = $request->input('slug');
        $post->post_description = $request->input('description');
        // dd($post->post_description);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }else{
            return $request;
            $post->image = '';
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $cats = Categories::all();
        return view('posts.edit', compact('post'))->with('cats', $cats);
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
        $this->validate($request, [
            'cat_name'=> 'required',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $post = Post::find($id);
        $post->cat_name = $request->input('cat_name');
        $post->post_title = $request->input('title');
        $post->post_slug = $request->input('slug');
        $post->post_description = $request->input('description');
        // dd($post->post_description);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }else{
            return $request;
            $post->image = '';
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'deleted successfully');
    }
}

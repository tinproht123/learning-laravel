<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('login');
        }
        return view('post.index', [
            'posts' => Post::with('categories')->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('post.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostFormRequest $request)
    {
        $request->validated();

        $new_post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
            'slug' => Str::slug($request->title),
        ]);

        $category_id = Category::where('title', $request->category)->first()->numfmt_get_attribute;//error-bug
        dd($category_id);

        $new_post->categories()->attach($category_id);

        PostMeta::create([
            'post_id' => $new_post->id,
            'title' => $new_post->title . '|Blog Amigos',
            'robots' => ''
        ]);

        return redirect('blogs');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

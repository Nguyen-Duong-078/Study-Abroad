<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
    return view('client.posts.index', compact('posts'));

    }
  public function show($id)
{
    $post = Post::with('category')->findOrFail($id); // sẽ gây lỗi nếu không tìm thấy
      $relatedPosts = Post::where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->latest()
        ->take(3)
        ->get();
    return view('client.posts.show', compact('post','relatedPosts'));
}

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{


public function index() {
    $posts = Post::latest()->paginate(10);
    return view('admin.post.index', compact('posts'));
}

public function create() {
    $categories = Categorie::all(); // nếu có danh mục
    return view('admin.post.create', compact('categories'));
}

public function store(Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'category_id' => 'required|exists:categories,id',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('thumbnail')) {
        $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
    }

    Post::create($data);

    return redirect()->route('posts.index')->with('success', 'Thêm bài viết thành công!');
}
public function show($id)
{
    $post = Post::with('category')->findOrFail($id);
    return view('admin.post.show', compact('post'));
}
public function destroy($id)
{
    $post = Post::findOrFail($id);

    // Xóa ảnh nếu có
    if ($post->thumbnail && Storage::exists($post->thumbnail)) {
        Storage::delete($post->thumbnail);
    }

    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Xóa bài viết thành công.');
}
}

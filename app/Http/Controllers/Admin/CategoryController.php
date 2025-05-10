<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data=Categorie::all();
        return view('admin.categories.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean',
        ],[
            'name.required' => 'Tên danh mục không được để trống',
            'is_active.boolean' => 'Trạng thái không hợp lệ',
        ]);
        $data = $request->only(['name', 'is_active']);
        Categorie::create($data);

        return redirect()->route('categories.create')->with('success', 'Them thanh cong !');

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
        $category =Categorie::findOrFail($id);
        return view('admin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only(['name']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        Categorie::findOrFail($id)->update($data);

        return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $category = Categorie::findOrFail($id);
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Xoá danh mục thành công!');
    }
}

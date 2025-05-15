<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::with('categorie')->latest()->paginate(10);
        return view('admin.school.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categorie = Categorie::all();
        return view('admin.school.create', compact('Categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'categorie_id' => 'required|exists:categories,id',
            'korean_name' => 'required|string|max:255',
            'english_name' => 'required|string|max:255',
            'number_of_students' => 'required|integer',
            'tuition' => 'required|string',
            'year_of' => 'required|integer',
            'address' => 'required|string',
            'description' => 'required|string',
            'dormitory' => 'required|string',
            'website' => 'required|url',
            'under' => 'required|string',
            'content' => 'required|string',
            'img_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'categorie_id.required' => 'Danh mục không được để trống',
            'korean_name.required' => 'Tên tiếng Hàn không được để trống',
            'english_name.required' => 'Tên tiếng Anh không được để trống',
            'number_of_students.required' => 'Số lượng học sinh không được để trống',
            'tuition.required' => 'Học phí không được để trống',
            'year_of.required' => 'Năm thành lập không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'description.required' => 'Mô tả không được để trống',
            'dormitory.required' => 'Ký túc xá không được để trống',
            'website.required' => 'Website không được để trống',
            'under.required' => 'Thông tin thêm không được để trống',
            'content.required' => 'Nội dung không được để trống',
            'img_thumbnail.required' => 'Ảnh thumbnail không được để trống',
            'img_thumbnail.image' => 'Ảnh thumbnail không hợp lệ',
            'img_thumbnail.mimes' => 'Ảnh thumbnail phải là định dạng jpeg, png, jpg, gif, svg',
            'img_thumbnail.max' => 'Ảnh thumbnail không được lớn hơn 2MB',
            'categorie_id.exists' => 'Danh mục không tồn tại',
            'korean_name.string' => 'Tên tiếng Hàn không hợp lệ',
            'english_name.string' => 'Tên tiếng Anh không hợp lệ',
            'number_of_students.integer' => 'Số lượng học sinh không hợp lệ',
            'tuition.string' => 'Học phí không hợp lệ',
            'year_of.integer' => 'Năm thành lập không hợp lệ',
            'address.string' => 'Địa chỉ không hợp lệ',
            'description.string' => 'Mô tả không hợp lệ',
            'dormitory.string' => 'Ký túc xá không hợp lệ',
            'website.url' => 'Website không hợp lệ',
            'under.string' => 'Thông tin thêm không hợp lệ',
            'content.string' => 'Nội dung không hợp lệ',
        ]);

        $imagePath = $request->file('img_thumbnail')->store('thumbnails', 'public');

        $school = $request->only([
            'categorie_id',
            'korean_name',
            'english_name',
            'number_of_students',
            'tuition',
            'year_of',
            'address',
            'description',
            'dormitory',
            'website',
            'under',
            'content'
        ]);
        $school['img_thumbnail'] = $imagePath;

        $school['slug'] = Str::slug($school['english_name']);

        School::create($school);

        return redirect()->route('schools.create')->with('success', 'Thêm trường thành công!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categorie::all();
        $school = School::with('categorie')->findOrFail($id);
        return view('admin.school.show', compact('school', 'categories'));
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie_id' => 'required|exists:categories,id',
            'korean_name' => 'required|string|max:255',
            'english_name' => 'required|string|max:255',
            'number_of_students' => 'required|integer',
            'tuition' => 'required|string',
            'year_of' => 'required|integer',
            'address' => 'required|string',
            'description' => 'required|string',
            'dormitory' => 'required|string',
            'website' => 'required|url',
            'under' => 'required|string',
            'content' => 'required|string',
            'img_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $school = School::findOrFail($id);

        // Nếu có ảnh mới thì lưu và cập nhật
        if ($request->hasFile('img_thumbnail')) {
            $imagePath = $request->file('img_thumbnail')->store('thumbnails', 'public');
            $school->img_thumbnail = $imagePath;
        }

        // Cập nhật các trường còn lại
        $school->update([
            'categorie_id' => $request->categorie_id,
            'korean_name' => $request->korean_name,
            'english_name' => $request->english_name,
            'number_of_students' => $request->number_of_students,
            'tuition' => $request->tuition,
            'year_of' => $request->year_of,
            'address' => $request->address,
            'description' => $request->description,
            'dormitory' => $request->dormitory,
            'website' => $request->website,
            'under' => $request->under,
            'content' => $request->content,
        ]);

        return redirect()->route('schools.show', $id)->with('success', 'Cập nhật trường thành công!');
    }

    //


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = School::findOrFail($id);
        $school->delete();

        return redirect()->route('schools.index')->with('success', 'Xóa trường học thành công!');
    }
}

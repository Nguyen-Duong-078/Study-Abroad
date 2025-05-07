<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\School;
use Illuminate\Http\Request;

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
            'img_thumbnail' => 'required|image|max:2048',
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

    School::create($school);

    return redirect()->route('schools.create')->with('success', 'Thêm trường thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categorie::all();
        $school= School::with('categorie')->findOrFail($id);
        return view('admin.school.show', compact('school','categories'));
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

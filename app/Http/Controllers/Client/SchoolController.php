<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function school(string $id)
    {
        $school = School::findOrFail($id);
        return view('client.study.show', compact('school'));
    }

    public function schools()
    {
        $new = School::query()->latest()->first();
        $random = School::query()->inRandomOrder()->first();

        $excludedIds = collect([$new?->id, $random?->id])->filter(); // loại bỏ null nếu có

        $schools = School::query()
            ->whereNotIn('id', $excludedIds)
            ->paginate(6);

        return view('client.study.school', compact('schools', 'new', 'random'));

    }
}

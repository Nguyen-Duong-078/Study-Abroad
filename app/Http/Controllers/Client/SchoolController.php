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
        return view('client.study.school', compact('school'));
    }
}

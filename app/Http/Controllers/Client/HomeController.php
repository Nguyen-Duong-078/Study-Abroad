<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\School;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const PATH_VIEW = 'client.';
    public function index()
    {

        $posts = Post::latest()->take(3)->get();
        $schools = School::query()->take(3)->get();
        return view('client.home', compact('schools','posts'));

    }
    public function about()
    {
        return view('client.about');
    }
    public function overview()
    {
        return view('client.study_abroad.overview');
    }
    public function expense()
    {
        return view('client.study_abroad.expense');
    }
    public function visa()
    {
        return view('client.study_abroad.visa');
    }
    public function famous_industry()
    {
        return view('client.study_abroad.famous_industry');
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
        //
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

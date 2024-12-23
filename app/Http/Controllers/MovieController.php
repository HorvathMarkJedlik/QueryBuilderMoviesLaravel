<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requests\StoreMovieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = DB::table('movies')->orderBy('title', 'desc')->get();
        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $validated = $request->validated();
        DB::table('movies')->insert([
            'title' => $validated['title'],
            'director' => $validated['director'],
            'release_year' => $validated['release_year'],
            'rating' => $validated['rating'],
            'created_at' => now(),
            'updated_at' => now()

        ]);
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

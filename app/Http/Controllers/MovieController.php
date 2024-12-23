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

        return redirect()->route('movies.index')->with('success', 'Movie created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = DB::table('movies')->where('id', $id)->first();
        if(!$movie){
            abort(404);
        }
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = DB::table('movies')->where('id', $id)->first();
        if(!$movie){
            abort(404);
        }
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMovieRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('movies')
            ->where('id', $id)
            ->update([
                'title' => $validated['title'],
                'director' => $validated['director'],
                'release_year' => $validated['release_year'],
                'rating' => $validated['rating'],
                'updated_at' => now(), 
        ]);
        return redirect()->route('movies.show', $id)->with('success', 'Movie updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('movies')->delete($id);
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }
}

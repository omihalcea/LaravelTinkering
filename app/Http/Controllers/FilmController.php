<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Film $film)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required|integer',
            'year' => 'required|integer',
        ]);

        $film->create($validated);
        return redirect()->route('films.index')->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'duration' => 'required|integer',
            'year' => 'required|integer',
        ]);

        $film->update($validated);
        return redirect()->route('films.index')->with('success', 'Film updated successfully.');
    }

    public function destroy($id)
    {
        $film = Film::find($id);

        if ($film) {
            $film->delete();
            return redirect()->route('films.index')->with('success', 'Film deleted successfully.');
        }

        return redirect()->route('films.index')->with('error', 'Film not found.');
    }
}

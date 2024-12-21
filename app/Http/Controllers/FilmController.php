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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'duracion' => 'required|integer',
            'fecha_estreno' => 'required|date',
        ]);

        Film::create($validated);
        return redirect()->route('films.index')->with('success', 'Film added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'duracion' => 'required|integer',
            'fecha_estreno' => 'required|date',
        ]);

        $film->update($validated);
        return redirect()->route('films.index')->with('success', 'Film updated successfully.');
    }

    public function destroy(Request $request)
    {
        $film = Film::find($request->id);

        if ($film) {
            $film->delete();
            return redirect()->route('films.index')->with('success', 'Film deleted successfully.');
        }

        return redirect()->route('films.index')->with('error', 'Film not found.');
    }
}

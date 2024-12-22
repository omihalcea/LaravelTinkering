<?php

namespace App\Http\Controllers;

use App\Models\videogames;
use Illuminate\Http\Request;

class VideogamesController extends Controller
{
    public function index()
    {
        $videogames = Videogames::all();
        return view('videogames.index', compact('videogames'));
    }

    public function create()
    {
        return view('videogames.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'studio' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
            'year' => 'required|integer',
        ]);

        Videogames::create($validated);
        return redirect()->route('videogames.index')->with('success', 'Videjoc creat amb èxit.');
    }

    public function show($id)
    {
        $videogames = Videogames::findOrFail($id);
        return view('videogames.show', compact('videogames'));
    }

    public function edit($id)
    {
        $videogames = Videogames::findOrFail($id);
        return view('videogames.edit', compact('videogames'));
    }

    public function update(Request $request, Videogames $videogame)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'studio' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
            'year' => 'required|integer',
        ]);

        $videogame->update($validated);
        return redirect()->route('videogames.index')->with('success', 'Videjoc actualitzat amb èxit.');
    }

    public function destroy($id)
    {
        $videogames = Videogames::find($id);

        if ($videogames) {
            $videogames->delete();
            return redirect()->route('videogames.index')->with('success', 'Film deleted successfully.');
        }

        return redirect()->route('videogames.index')->with('error', 'Film not found.');
    }
}

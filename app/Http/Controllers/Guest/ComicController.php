<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;


/**
 * this is a controller for the comics it will handle the logic for the comics
 */
class ComicController extends Controller
{
    /**
     * this will return the view of the comics, it will get the comics from the database and pass them to the view
     */
    public function index()
    {
        $comics = Comic::get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validazione dei dati
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string|url',
            'series' => 'required|string',
            'price' => 'required|min:0|max:100|numeric',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        // salva il comic
        $comic = Comic::create($request->all());

        // redirect alla show del comic creato
        return redirect()->route('comics.show', ['id' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::find($id);
        // controllare la validita del request esempio i dati  devono essere giusti 
        // questo basta e rilascera errors nella session che potra essere accessibile tramite errors 
        // $errorcontainer nella view
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string|url',
            'series' => 'required|string',
            'price' => 'required|min:0|max:100|numeric',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);
       
      // messo qui perche prima fa il controllo e poi aggiorna      
        $comic->update($request->all());
        // setutto va bene aggiorna il comic

        // redirect alla show del comic aggiornato
        return redirect()->route('comics.show', ['id' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}

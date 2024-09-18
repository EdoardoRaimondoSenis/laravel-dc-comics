<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
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
        $request->validate([
            'title' => 'required|string|min:3|max:80',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|string|max:4',
            'series' => 'required|string|max:80',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:40',
        ],[
            'title.min' => 'deve contenere un minimo di :min caratteri',
            'title.max' => 'puo\' contenere un massimo di :max caratteri',
            'title.required' => 'il titolo e\' obbligatorio',
            'description.required' => 'la descrizione e\' obbligatoria',
            'thumb.required' => 'l\' immagine e\' obbligatoria',
            'price.required' => 'il prezzo e\' obbligatorio',
            'price.max' => 'puo\' contenere un massimo di :max caratteri',
            'series.required' => 'il nome di saga di provenienza e\' obbligatorio',
            'series.max' => 'puo\' contenere un massimo di :max caratteri',
            'sale_date.required' => 'la data di uscita e\' obbligatoria',
            'type.required' => 'il  tipo e\' obbligatorio',
            'type.max' => 'puo\' contenere un massimo di :max caratteri',
        ]);

        
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
        $data = $request->all();
        $comic = Comic::find($id);
        $comic->update($data);
        return redirect()->route('comics.show', $comic);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    public function validate(Request $request, array $rules, array $messages = [], array $attributes = [])
    {
        
    }
}

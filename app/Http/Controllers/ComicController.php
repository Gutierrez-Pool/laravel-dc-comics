<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request, $comic);

        $this->validation($request->all());


        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    // funzione privata per i controlli di validazione
    private function validation($data) {
        $validator = Validator::make($data, [
            "title" => "required|max:100",
            "description" => "nullable | max:5000",
            "thumb" => "nullable | max:255",
            "price"=> "nullable | max:7",
            "series"=> "required|max:100",
            "sale_date"=> "nullable",
            "type"=> "required|max:100",
            "artists"=> "nullable|max:1000",
            "writers"=> "nullable|max:1000",
        ], [
            "title.required"=> "Devi inserire il titolo",
            "title.max"=> "Il titolo deve avere meno di :max caratteri",
            "description.max"=> "La descrizione deve avere meno di :max caratteri",
            "thumb.max"=> "Il link dell'immagine deve avere meno di :max caratteri",
            "price.max"=> "Il prezzo deve avere meno di :max caratteri",
            "series.required"=> "Devi inserire la serie",
            "series.max"=> "Le serie deve avere meno di :max caratteri",
            "type.required"=> "Devi inserire il tipo",
            "type.max"=> "Il tipo deve avere meno di :max caratteri",
            "artists.max"=> "Artisti deve avere meno di :max caratteri",
            "writers.max"=> "Scrittori deve avere meno di :max caratteri",

            // "max"=> "Il campo :attribute deve avere massimo :max caratteri",
            // "required"=> "Il campo :attribute deve essere inserito",
            // possiamo creare messaggi generali per regole condivise tra piu campi
        ])->validate();
    }
}


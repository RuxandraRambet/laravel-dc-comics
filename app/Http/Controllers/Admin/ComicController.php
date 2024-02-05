<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        // dd($comics);
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
        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'required|max:500',
        //     'thumb' => 'required|url',
        //     'price' => 'required',
        //     'series' => 'required|max:100',
        //     'sale_date' => 'required',
        //     'type' => 'required|max:50',
        // ]);

        // $data = $request->all();

        $data = $this->validation($request->all());

        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);

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
        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // $data = $request->all();
        $data = $this->validation($request->all());
        $comic->update($data);
        // dd($data, $comic);

        return redirect()->route('comics.show', $comic->id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data) 
    {

        $validator = Validator::make($data, [
            'title' => 'required|max:100',
            'description' => 'required|max:500',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50',
        ],
        [
            'title.required' => 'Il titolo è necessario',
            'title.max' => 'Il titolo non può superare i :max caratteri',
            'description.required' => 'La descrizione è necessaria',
            'description.max' => 'La descrizione non può superare i :max caratteri',
            'price.required' => 'Il prezzo è necessario',
            'series.required' => 'Il nome della serie è necessario',
            'series.max' => 'Il nome della serie non può superare i :max caratteri',
            'sale_date.required' => 'La data di venita è necessarioa',
            'type.requires' => ' Il tipo è necessario',
            'type.max' => 'Il tipo non può superare i :max caratteri'

        ])->validate();

        return $validator;
        
    }
}

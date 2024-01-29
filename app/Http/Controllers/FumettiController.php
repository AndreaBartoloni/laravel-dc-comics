<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fumetti;

class FumettiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fumetti = Fumetti::all();
        return view("fumetti.index", ["fumetti" => $fumetti]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("fumetti.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:10, max:50",
            "description" => "",
            "thumb" => "required",
            "price" => "required",
            "series" => "required",
            "sale_date" => "required",
            "type" => "required"
        ]);

        $data = $request->all();

        $newFumetto = new Fumetti();
     
        // $newFumetto->title = $data['title'];
        // $newFumetto->description = $data['description'];
        // $newFumetto->thumb = $data['thumb'];
        // $newFumetto->price = $data['price'];
        // $newFumetto->series = $data['series'];
        // $newFumetto->sale_date = $data['sale_date'];
        // $newFumetto->type = $data['type'];
        $newFumetto->fill($data); // altro modo per prendere i dati dalla richiesta e popolarli
        $newFumetto->save();
        return redirect()->route('fumetti.show', $newFumetto->id);
    }
    //public function show($string $id) // senza dependecy injection
    public function show(Fumetti $fumetti)//CON dependecy injection
    {
        //$fumettiDetails = Fumetti::find($id);  senza dependecy injection
        return view("fumetti.show", compact("fumetti")); //CON dependecy injection
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fumetti $fumetti)
    {
        return view("fumetti.edit", compact("fumetti"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fumetti $fumetti)
    {
        $data = $request->all();

        $fumetti->title = $data['title'];
        $fumetti->description = $data['description'];
        $fumetti->thumb = $data['thumb'];
        $fumetti->price = $data['price'];
        $fumetti->series = $data['series'];
        $fumetti->sale_date = $data['sale_date'];
        $fumetti->type = $data['type'];
        $fumetti->save();
        return redirect()->route('fumetti.show', $fumetti->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

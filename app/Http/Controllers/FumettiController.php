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
        $data = $request->all();

        $newFumetto = new Fumetti();
        $newFumetto->title = $data['title'];
        $newFumetto->description = $data['description'];
        $newFumetto->thumb = $data['thumb'];
        $newFumetto->price = $data['price'];
        $newFumetto->series = $data['series'];
        $newFumetto->sale_date = $data['sale_date'];
        $newFumetto->type = $data['type'];
        $newFumetto->save();
        return redirect()->route('fumetti.show', $newFumetto->id);
    }
 
    public function show(Fumetti $fumetti)
    {
        //$fumettiDetails = Fumetti::find($id);
        return view("fumetti.show", compact("fumetti"));
        
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

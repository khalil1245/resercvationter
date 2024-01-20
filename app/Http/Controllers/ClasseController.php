<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classes;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //permet de lister les classe et envoie a la vue liste_classe
     public function index()
    {
        //
        $classes = Classes::all();
        return view('classe.liste_classe', ['classes' => $classes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

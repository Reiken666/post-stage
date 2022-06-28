<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuteurRequest;
use App\Http\Requests\UpdateAuteurRequest;
use App\Models\Auteur;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuteurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function show(Auteur $auteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Auteur $auteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuteurRequest  $request
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuteurRequest $request, Auteur $auteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auteur $auteur)
    {
        //
    }
}

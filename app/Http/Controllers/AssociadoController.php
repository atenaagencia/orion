<?php

namespace App\Http\Controllers;

use App\Associados;
use Illuminate\Http\Request;

class AssociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associados = Associados::all();
        return view('associados.pages.index')->with(compact('associados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('associados.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Associados  $associados
     * @return \Illuminate\Http\Response
     */
    public function show(Associados $associados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Associados  $associados
     * @return \Illuminate\Http\Response
     */
    public function edit(Associados $associados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Associados  $associados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Associados $associados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Associados  $associados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associados $associados)
    {
        //
    }
}

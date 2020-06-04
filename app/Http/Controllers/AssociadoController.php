<?php

namespace App\Http\Controllers;

use App\Associado;
use Illuminate\Http\Request;


class AssociadoController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Associado::class, 'associado');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associados= Associado::all();
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
        $query = Associado::create($request->all());

        return redirect(route('associado.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function show(Associado $associado)
    {
        return view('associados.pages.show')->with(compact('associado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function edit(Associado $associado)
    {
        return view('associados.pages.edit')->with(compact('associado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Associado $associado)
    {
        $associado->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associado $associado)
    {
        //
    }
}

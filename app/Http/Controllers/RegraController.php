<?php

namespace App\Http\Controllers;

use App\Regra;
use App\RegrasAssociados;
use App\Associado;
use Illuminate\Http\Request;

class RegraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regras = RegrasAssociados::select('associado_id')->distinct()->get();
        return view('regras.pages.index')->with(compact('regras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Regra  $regra
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $associado = Associado::find($id);
        $regras = RegrasAssociados::where('associado_id', $id)->orderby('regra_id', 'asc')->get();
        return view('regras.pages.show')->with(compact('regras','associado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regra  $regra
     * @return \Illuminate\Http\Response
     */
    public function edit(Regra $regra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regra  $regra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regra $regra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regra  $regra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regra $regra)
    {
        //
    }
}

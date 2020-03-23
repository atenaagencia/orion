<?php

namespace App\Http\Controllers;

use App\Vinculo;
use Illuminate\Http\Request;

class VinculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = Vinculo::create($request->all());

        return redirect(route('associado.show',$request->associado_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vinculo  $vinculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vinculo $vinculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vinculo  $vinculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinculo $vinculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vinculo  $vinculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vinculo $vinculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vinculo  $vinculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinculo $vinculo)
    {
        //
    }
}

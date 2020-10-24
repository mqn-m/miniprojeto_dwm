<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pratos = Prato::latest()->get();
        return view('pratos.index', ['pratos' => $pratos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pratos.novo');
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
     * @param  \App\Models\Prato  $Prato
     * @return \Illuminate\Http\Response
     */
    public function show(Prato $Prato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prato  $Prato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pratos = Prato::find($id);
        return view('pratos.editar', ['pratos' => $pratos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prato  $Prato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prato $Prato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prato  $Prato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prato $Prato)
    {
        //
    }
}

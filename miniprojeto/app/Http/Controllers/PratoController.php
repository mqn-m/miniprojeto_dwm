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
        $pratos = Prato::where('user_id', auth()->id())->orderBy('nome','asc')->paginate(9);
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
    public function store()
    {
        $prato = new Prato(request(['nome','cal','nota']));
        $prato->user_id = auth()->id();
        $prato->save();
        

        return redirect('/pratos');
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
    public function edit(Prato $pratos)
    {
        return view('pratos.editar', compact('pratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prato  $Prato
     * @return \Illuminate\Http\Response
     */
    public function update(Prato $pratos)
    {
        $pratos->nome = request('nome');
        $pratos->cal = request('cal');
        $pratos->nota = request('nota');

        $pratos->save();

        return redirect('/pratos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prato  $Prato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prato $pratos)
    {
        $pratos->delete();

        return redirect('/pratos');
    }
}

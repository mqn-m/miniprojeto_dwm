<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use App\Models\Refeicao;
use Illuminate\Http\Request;

class RefeicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refeicaos = Refeicao::orderBy('data_refeicao', 'desc')->get();
        return view('refeicoes.index', ['refeicaos' => $refeicaos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('refeicoes.novo', ['pratos' => Prato::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedatributes = request()->validate([
            'altura_dia' => ['required'],
            'data_refeicao' => ['required', 'date'],
            'total_cal' => ['required', 'numeric', 'min:0'],
        ]);

        $refeicao = new Refeicao($validatedatributes);
        $refeicao->user_id =1; //auth()->id()
        $refeicao->save();

        $refeicao->pratos()->attach(request('pratos'));

        return redirect('/refeicoes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refeicao  $refeicao
     * @return \Illuminate\Http\Response
     */
    public function show(Refeicao $refeicao)
    {
        return view('refeicoes.show', ['refeicao' => $refeicao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refeicao  $refeicao
     * @return \Illuminate\Http\Response
     */
    public function edit(Refeicao $refeicao)
    {
        return view('refeicoes.editar', ['refeicao' => $refeicao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refeicao  $refeicao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refeicao $refeicao)
    {
        $validatedatributes = request()->validate([
            'altura_dia' => ['required'],
            'data_refeicao' => ['required', 'date'],
            'total_cal' => ['required', 'numeric', 'min:0'],
        ]);

        $refeicao->update($validatedatributes);

        return redirect('/refeicoes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refeicao  $refeicao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refeicao $refeicao)
    {
        $refeicao->delete();
        return redirect('/refeicoes');
    }
}

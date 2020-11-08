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
        $refeicaos = Refeicao::where('user_id', auth()->id())->orderBy('data_refeicao', 'desc')->paginate(9);
        return view('refeicoes.index', ['refeicaos' => $refeicaos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $altura_dia_options = [
            "Pequeno-Almoço",
            "Lanche manhã",
            "Almoço",
            "Lanche tarde",
            "Jantar",
            "Ceia"
        ];

        $pratos = Prato::where('user_id', auth()->id())->get();
        return view('refeicoes.novo', compact('altura_dia_options','pratos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRefeicao();

        $refeicao = new Refeicao(request(['altura_dia', 'data_refeicao', 'total_cal', 'notas']));

        $refeicao->user_id = auth()->id();
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
        $altura_dia_options = [
            "Pequeno-Almoço",
            "Lanche manhã",
            "Almoço",
            "Lanche tarde",
            "Jantar",
            "Ceia"
        ];

        $pratos = Prato::where('user_id', auth()->id())->get();

        return view('refeicoes.editar', compact('altura_dia_options','pratos', 'refeicao'));
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
        $this->validateRefeicao();

        $refeicao->total_cal = request('notas');
        $refeicao->altura_dia = request('altura_dia');
        $refeicao->data_refeicao = request('data_refeicao');
        $refeicao->total_cal = request('total_cal');
        $refeicao->notas = request('notas');

        $refeicao->save();

        $refeicao->pratos()->sync(request('pratos'));

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


    public function validateRefeicao()
    {
        request()->validate([
            'altura_dia' => ['required'],
            'data_refeicao' => ['required', 'before:tomorrow'],
            'total_cal' => ['required', 'numeric', 'min:0', 'max:1000000'],
            'pratos' => ['exists:pratos,id'],
            'notas' => ['max:100']
        ]);
    }
}

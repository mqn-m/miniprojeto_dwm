<?php

namespace App\Http\Controllers;

use App\Models\Estatistica;
use App\Models\Refeicao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstatisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatisticas = DB::table('refeicaos')->select('data_refeicao', DB::raw('SUM(total_cal) as calorias'))->where('user_id', auth()->id())->groupBy('data_refeicao')->get();
        return view('estatisticas.index', ['estatisticas' => $estatisticas]);
    }
}

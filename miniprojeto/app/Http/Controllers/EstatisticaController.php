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
        $estatisticas = Refeicao::select('data_refeicao', DB::raw('SUM(total_cal) as calorias'))->where('user_id', auth()->id())->groupBy('data_refeicao')->orderBy('data_refeicao', 'desc')->paginate(12);
        $mediaRefeicao = Refeicao::where('user_id', auth()->id())->avg('total_cal');
        $numRefeicao = Refeicao::where('user_id', auth()->id())->count('id');
        $numcals = 0;
        $numeroDias = 0;
        foreach($estatisticas as $dia){
            $numeroDias += 1;
            $numcals += $dia['calorias'];
        }

        if($numeroDias == 0){
            $mediaDia = 0;
            $mediaRefeicao = 0;
            $numcals = 0;
        }else{
            $mediaDia = $numcals / $numeroDias;
        }
        $mediaRefeicao = round($mediaRefeicao);
        $mediaDia = round($mediaDia);

        

        return view('estatisticas.index', compact('estatisticas',  'mediaRefeicao', 'mediaDia', 'numRefeicao', 'numeroDias'));
    }
}

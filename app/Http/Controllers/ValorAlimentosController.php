<?php

namespace App\Http\Controllers;

use App\Models\ValorAlimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValorAlimentosController extends Controller
{
    public function index() 
    {

        $valor_alimentos = DB::table('valor_alimentos')->get();
        return view('valor_alimentos.index', ['valor_alimentos' => $valor_alimentos]);
    }

    public function getValorAlimentos(Request $request) 
    {
        $valor_alimento = ValorAlimento::where('alimento_id', $request->alimento_id)->first();
        $fotos = [
            'https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202009/18/00118611301427____3__600x600.jpg',
            'https://www3.gobiernodecanarias.org/medusa/wiki/images/e/ed/Platano-canario.png',
            'https://static.condisline.com/resize_1280x1024/images/catalog/large/210544.jpg'
        ];
        return view('valor_alimentos.index', ['valor_alimento' => $valor_alimento, 'foto' => $fotos[$request->alimento_id-1]]);
        // return $valor_alimento;
    }
}

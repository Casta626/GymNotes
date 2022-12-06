<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
    public function getAlimentos(){
        $alimentos = Alimento::all();
        $fotos = [
            'https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/202009/18/00118611301427____3__600x600.jpg',
            'https://www3.gobiernodecanarias.org/medusa/wiki/images/e/ed/Platano-canario.png',
            'https://static.condisline.com/resize_1280x1024/images/catalog/large/210544.jpg'
        ];

        return view('alimentos', ['alimentos' => $alimentos, 'fotos' => $fotos]);
    }
}

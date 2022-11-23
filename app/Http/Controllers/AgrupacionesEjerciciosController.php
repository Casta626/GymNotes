<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgrupacionesEjerciciosController extends Controller
{
    // main helper
    // if (! function_exists('saveFileFromBase64')) {
        /**
         * 
         *
         * @param  string  $documento
         * Aquí va el documento en base64 que llega desde la request.
         * 
         * @param  string  $nombre
         * Nombre del documento, por ejemplo, bajas_empleados_Paco_Mel_02/11/2022 (la extension la obtiene automáticamente).
         * 
         * @param  string  $storageDisk
         * Javi no quiere que ponga nada.
         * 
         * @return bool    $file
         */
    
    //     function saveFileFromBase64($documento, $nombre, $storageDisk)
    //     {
    //         $ext = explode('/', mime_content_type($documento))[1];
    
    //         if ($ext == 'vnd.openxmlformats-officedocument.wordprocessingml.document') {
    //             $ext = 'docx';
    //         }
    
    //         if ($ext == 'rtf') {
    //             $ext = 'doc';
    //         }
    
    //         $exp = explode(',', $documento);
    //         $documento = $exp[1];
            
    //         $nombreArchivo = "{$nombre}.{$ext}";
    
    //         // $file = Storage::disk('bajas_laborales_empleados')->put($nombreArchivo, base64_decode($documento));
    //         $file = Storage::disk($storageDisk)->put($nombreArchivo, base64_decode($documento));
            
    //         return $nombreArchivo;
    //     }
    // }

    // filesistem

    /*
    'dni' => [
            'driver' => 'local',
            'root' => storage_path('app/public/dni'),
            'url' => env('APP_URL') . '/storage/dni',
            'visibility' => 'public'
        ],
    */
}

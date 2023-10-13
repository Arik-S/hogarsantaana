<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Background;

class BackgroundController extends Controller
{
    protected function index()
    {
        return view('admin.background.index');
    }

    protected function insertBackground(Request $request)
    {
        //Estos nombres estan en background.blade.php
        $input_nombre = $request->input('nombre');
        $input_imagen = $request->file('imagen');
        //Guarda la imagen dentro de la carpeta fondos que esta dentro de public/storage/fondos
        $ruta_imagen = "/storage/" . $input_imagen->store('fondos', 'public');
        //Hacer siempre que se quiera almacenar la imagen se ejecuta  php artisan storage:link 
        
        $background = new Background();
        $background->nombre = $input_nombre;
        $background->url = $ruta_imagen;

        $background->save();
    }
}

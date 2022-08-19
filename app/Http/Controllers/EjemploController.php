<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function ejemplo(){

        return response()->json([
            'nombre'=>'juanito',
            'game'=>'zelda'
        ]);
    }
}

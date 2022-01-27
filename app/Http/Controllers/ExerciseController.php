<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function doc(Request $request){

        $request->doc->storeAs('public','file.jpg');
        return "Arquivo enviado";
    }
}

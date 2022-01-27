<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerController extends Controller
{
    public function document(Request $request){

        $request->document->storeAs('public','file.jpg');
        return "Arquivo enviado";
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class catequeseController extends Controller
{

    //Retorna o inicio da catequse
    public function index(){
        return view('catequese.index');
    }

    public function searchCatequizandos(){
        return response()->json('Hello World');
    }
}

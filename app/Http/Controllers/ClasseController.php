<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClasseController extends Controller
{
    public function show( $idc){
        $class=Classe::get()->where('id',$idc);
        
        return view('showclasse',[
           'idc'=>$class
        ]);
        
    }
}

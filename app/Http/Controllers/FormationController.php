<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function search(){
        $idFormations=Formation::select('idf')->get();
        return view('searchformation',['idfs'=>$idFormations]);
    }
    public function rechercher(Request $request){
        $ff=Formation::with('classes.etudiants')->find($request->f);

        $idFormation=Formation::select('idf')->get();
        return response()->json(['formation'=>$ff]);
    }
    public function index()
    {
        $f=Formation::all();
        return view('showformations',["formations"=>$f]);
    }
    public function show(string $id)
    {
        $f= Formation::find($id);
        $classes=$f->classes;
        return view('detailsformation',["formation"=>$f,"classes"=>$classes]);
    }
}

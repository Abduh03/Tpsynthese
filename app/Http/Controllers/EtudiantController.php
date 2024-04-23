<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ClasseController;
use Illuminate\Http\Request;
use App\Models\Etudiant; 

use App\Models\Classe;

class EtudiantController extends Controller
{
    public function index()
    {
        $ets = Etudiant::all();
        return view('showetudiants', ["etudiants" => $ets]);
    }

    public function show(string $id)
    {
        $e = Etudiant::find($id);
        $classe = $e->classe;
        $AV = $e->avis;
        $formation = $classe->formation;
        return view('detailsetadiants', [
            "etudiant" => $e,
            "classe" => $classe,
            "AVIS" => $AV,
            "formation" => $formation
        ]);
    }


    public function edit (string $id)
    {
        $e=Etudiant::find($id);
        $idClasses=Classe::select('idc')->whereNotIn('idc',[$e->idclasse])->get();
        return view('editetudiant',['e'=>$e,'idclasses'=>$idClasses]);
    }
    public function update(Request $request, string $id)
    {
        Etudiant::where('codeE',$id)
        ->update(['idclasse'=>$request->l]);
        return redirect("/etudiants");
    }

    public function create( ){
        $IdClasse=Classe::select('idc')->orderBy('idc')->get();
        return view('createEtudiants',['idC'=>$IdClasse]);
    }

    public function store(Request $request){

        dd($request);
    
    //     $data=$request->validate([
    //         'nom'=>'required',
    //         'prenom'=>'required',
    //         'adresse'=>'required',
    //         'Id_classe'=>'required'
    //     ]);
    //     Etudiant::create($data);
    //    return redirect('/etudiants');
    }

}


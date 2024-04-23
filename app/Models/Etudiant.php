<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table="Etudiant";
    protected $primaryKey="codeE";
    // protected $timestamp=false;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable=['nom','prenom','adresse','dateNaissance'];
    public function classe(){
        return  $this->belongsTo(Classe::class,'idclasse');
    }
    public function avis(){
       return  $this->belongsToMany(Formation::class,'Avis','idE','idf')->withpivot('points');
    }
}

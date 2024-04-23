<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table="Classe";
    protected $primaryKey="idc";
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable=['libelle','NombreMax'];
    public function formation(){
      return  $this->belongsTo(Formation::class,'idformation');
    }
    public function etudiants(){
       return  $this->hasMany(Etudiant::class,'idclasse');
    }
}

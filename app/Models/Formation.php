<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $table="Formation";
    protected $primaryKey="idf";
    protected $fillable=['Titre','NbreHeure'];
    // protected $timestamp=false;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    public function classes(){
      return  $this->hasMany(Classe::class,'idformation');
    }
    public function avis(){
      return  $this->belongsToMany(Etudiant::class,'Avis','idE','idf');
    }
}

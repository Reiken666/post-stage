<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;

     /*
    Get the auteur livres'
    */
    public function livre()
    {
        return $this->hasMany(Livre::class,'ISBN');
    }


    
}



  
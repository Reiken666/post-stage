<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    /* Get the auteur of the livre.

    */

   public function auteur()

   {

       return $this->belongsTo(Auteur::class,'Nom');

   }
}


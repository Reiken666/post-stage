<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function auteurs()
    {
        return $this->belongsToMany(Author::class, 'livres_auteurs');
    }
}


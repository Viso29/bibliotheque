<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
    ];

    //Relation: Une categorie peut avoir plusieurs livres

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

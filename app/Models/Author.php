<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birth_date', 'nationality'];

    // Relation : Un auteur peut écrire plusieurs livres

    public function books()
    {
        return $this->hasMany(Book::class);  
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loarn extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'loaned_at','due_date', 'return_at'];
     
    // Relation avec l'utilisateur
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le livre
    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    // Relation : Un prêt peut avoir une amende

    public function fines()
    {
        return $this->hasMany(Fine::class);
    }
    
}

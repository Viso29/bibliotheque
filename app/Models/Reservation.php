<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'book_id', 'reserved_at', 'expires_at'];

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
}

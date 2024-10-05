<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id', 
        'message',
        'read_at',
    ];

    // Relation avec l'utilisateur 

    public function users()
    {
        return $this->belongsTo(User::class);  // Associe la table users avec la table notifications, avec une clé étrangère user_id
    }
}

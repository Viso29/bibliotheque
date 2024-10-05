<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'loan_id', 'amount', 'paid'];

    // Relation avec l'utilisateur
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le prêt
    public function loarns()
    {
        return $this->belongsTo(Loan::class);
    }
}

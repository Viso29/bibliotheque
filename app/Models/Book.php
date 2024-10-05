<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillabme = [

        'title',
        'author_id',
        'categories_id',
        'isbn',
        'published_year',
        'published_id',
        'quantity',
        'available',
    ];

    // Relation 

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function publishers()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }

    public function loarns()
    {
        return $this->hasMany(Loans::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservations::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}

<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'mid', 'movie_data'
    ];

    protected $casts = [
        'movie_data'    => 'json',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

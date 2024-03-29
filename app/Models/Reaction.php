<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'reaction'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    use HasFactory;

    protected $fillable = [
        'following_user',
        'followed_user'
    ];

    protected $table = 'friendships';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

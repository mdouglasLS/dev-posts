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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function following()
    {
        return $this->belongsToMany(User::class, 'friendships', 'following_user', 'followed_user');
    }

    public function followed()
    {
        return $this->belongsToMany(User::class, 'friendships', 'followed_user', 'following_user');
    }
}

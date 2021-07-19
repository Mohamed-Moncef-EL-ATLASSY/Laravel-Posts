<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Unlike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    public function likedBy(User $user) {
        return $this->likes->contains('user_id', $user->id);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function unlikes() {
        return $this->hasMany(Unlike::class);
    }

    // public function ownedByUser(User $user){
    //     return $user->id === $this->user_id;
    // }
}


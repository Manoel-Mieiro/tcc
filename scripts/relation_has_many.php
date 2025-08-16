<?php

namespace App\Models;

class User extends Model
{
    public string $table = 'users';

    public function posts(): SelectBuilder
    {
        return $this->hasMany(Post::class);
    }
}
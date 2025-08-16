<?php

namespace App\Models;

use Core\Abstractions\Model;
use Core\Database\Query\SelectBuilder;

class Team extends Model
{
    public string $table = 'teams';
    
    public function userPost(): SelectBuilder {
        return $this->trace(Post::class, [
            $this->enableTraceMode()->belongsToMany(
                Post::class, 
                caller_model: User::class
            ),
            $this->enableTraceMode()->hasMany(
                User::class, 
                caller_model: Team::class
            ),
        ]);
    }
}
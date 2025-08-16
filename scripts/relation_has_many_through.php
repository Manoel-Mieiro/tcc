<?php

namespace App\Models;

use Core\Abstractions\Model;
use Core\Database\Query\SelectBuilder;

class Enterprise extends Model
{
    public string $table = 'enterprises';

    public function tests(): SelectBuilder
    {
        return $this->hasManyThrough(Test::class, User::class);
    }
}
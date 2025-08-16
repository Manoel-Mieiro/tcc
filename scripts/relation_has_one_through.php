<?php

namespace App\Models;

use Core\Abstractions\Model;
use Core\Database\Query\SelectBuilder;

class Enterprise extends Model
{
    public string $table = 'enterprises';

    public function phone(): SelectBuilder
    {
        return $this->hasOneThrough(Phone::class, User::class);
    }
}
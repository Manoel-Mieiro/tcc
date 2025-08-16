<?php

use App\Models\User;

$user = User::find()->where('id', 1)->first()->get();
    
$user->delete();
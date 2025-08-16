<?php

use App\Models\User;

$id = 10;
$users = User::find($id);
$users = User::select()->get();
$users = User::select(['id', 'name'])->get();
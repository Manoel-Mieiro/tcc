Query::insert('users', [
        'name' => 'user name',
        'email' => 'user email',
        'password' => Hash::hashPassword('testPassword')
    ])->get();
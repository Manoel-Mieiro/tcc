Query::update('users', [
            'name' => 'newName',
            'email' => 'newEmail'
        ])->where('id', 10, '>')
        ->get();  
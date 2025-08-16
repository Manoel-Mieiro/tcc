$user = new User([
        'name' => 'test_name',
        'email' => 'test@email.com'
    ]);
    
$user->create();
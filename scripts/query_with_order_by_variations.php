Query::select('users')->orderBy(['name' => 'ASC'])->get();   

Query::select('users')
    ->orderBy(['name' => 'ASC', 'created_at' => 'DESC'])
    ->get();   

Query::select('users')
    ->orderBy(['name' => 'ASC', 'created_at' => null])
    ->get();  
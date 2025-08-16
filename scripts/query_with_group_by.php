Query::select('users')
    ->groupBy('name')
    ->get();   
    
Query::select('users')
    ->groupBy(['name', 'created_at'])
    ->get();  
Query::select('users')
    ->limit(5)
    ->get();   

Query::select('users')
    ->limit(5, 2)
    ->get();  
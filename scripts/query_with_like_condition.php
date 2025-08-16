Query::select('users')
    ->where('name', '%fakeName%', 'like')
    ->get();
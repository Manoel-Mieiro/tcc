Query::select('users')
    ->where('id', 1)
    ->orWhere('id', 2)
    ->get();
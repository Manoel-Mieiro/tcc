Query::select('users')
     ->whereBetween('created_at', '2000-10-10', '2023-10-10')
     ->get();
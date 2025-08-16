Query::select('users')
     ->whereNotBetween('created_at', '2000', '2023')
     ->get();
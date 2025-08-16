Query::select('users')->where('id', 10)->get();
Query::select('users')->where('id', 10, '=')->get();
Query::select('users')
    ->where('id', 10)
    ->where('name', 'fakeName')
    ->get();
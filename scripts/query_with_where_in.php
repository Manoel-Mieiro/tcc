Query::select('users')
    ->whereIn('id', 'users', [1, 2, 3, 4])
    ->get();

Query::select('users')
        ->whereIn('id', 'users', function (SelectBuilder $query) {
            return $query->from('post_user')
            ->column('user_id')->where('user_id', 50);
        })->get());
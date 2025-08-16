Query::select('users')
    ->whereAll('id', 'users', '<=', 
        function (SelectBuilder $query) {
            return $query->from('post_user')
            ->column('user_id')->where('user_id', 50);
        })->get();
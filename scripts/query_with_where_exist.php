Query::select('users')
        ->whereExists('users', function (SelectBuilder $query) {
            return $query
                ->from('post_user')
                ->column('user_id')
                ->where('id', 10);
        }
    )->get();
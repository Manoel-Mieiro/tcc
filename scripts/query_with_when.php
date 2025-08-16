Query::select('users')
        ->when($test = true, 'id', 'users', function (SelectBuilder $query) {
            return $query
                ->from('phones')->column('user_id')
                ->where('year', '2023');
        })->get();
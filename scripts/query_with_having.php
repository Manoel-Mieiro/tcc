Query::select('users', 'count(created_at)')
        ->having('count(created_at)', '2', '>', 
            function(HavingBuilder $having) {
                return $having->and('age', 20)
                    ->or('deleted_at', null, '<>');
            }
        )->get(); 
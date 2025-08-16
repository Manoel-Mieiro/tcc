Query::select('users')
    ->innerJoin('enterprises', function (JoinBuilder $join) {
        return $join->on('enterprise.id','users.enterprise_id');
    })->get();
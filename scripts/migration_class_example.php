Schema::create('users', function (TableBuilder $table) {
    $table->id()->primaryKey()->autoIncrement();
    $table->varchar('name', 225);
    $table->varchar('email', 125)->unique();
    $table->varchar('password', 125);
    $table->id('enterprise_id')->foreignKey('enterprises','id');
    return $table;
});
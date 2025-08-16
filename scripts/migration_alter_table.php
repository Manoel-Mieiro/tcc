Schema::alter('users', function (ChangeTableBuilder $table) {
    $table->varchar('newColumn', 225);
    return $table;
});
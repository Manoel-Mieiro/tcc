Schema::alter('users', function (ChangeTableBuilder $table) {
    $table->dropColumn('name');
    $table->dropConstraint('column_constraint_name');
    $table->dropIndex('index_users');
    $table->varchar('email')->notNull()->change();
    return $table;
});
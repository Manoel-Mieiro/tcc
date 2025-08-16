Schema::create('users',function (ChangeTableBuilder $table) {
    $table->varchar('name', 255);
    $table->index('name')->visible()->fullText();
});
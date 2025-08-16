namespace Database\Migrations;

class CreatePostsTable implements Migration {
    public static function up(): void {
        Schema::create('posts',function(TableBuilder $table){
            $table->bigInt('id')->primaryKey()->autoIncrement();
            $table->varchar('title',255);
            $table->timestamp('created_at');
            return $table;
        });
    }

    public static function down(): void {
        Schema::drop('posts');
    }
}
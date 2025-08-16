namespace App\Models;

use Core\Abstractions\Model;
use Core\Database\Query\SelectBuilder;

class User extends Model
{
    public string $table = 'users';

    public function post(): SelectBuilder {
        return $this->trace(Post::class, [
            $this->enableTraceMode()->belongsToMany(
                Post::class, 'id', 'user_id', 'id', 
                'post_id', 'post_user', User::class
            ),
        ]);
    }
}
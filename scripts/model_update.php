use App\Models\User;

$user = User::find()->where('id', 1)->first()->get();
$user->update([
    'name' => 'new_name',
    'email' => 'new_email'
]);
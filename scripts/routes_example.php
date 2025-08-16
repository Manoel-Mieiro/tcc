$route->get('/user/$id', [UserController::class, 'show']);

$route->default('/404', function () {
    view('404.galaxy.tpl', ['home_url' => Uri::getRootPath()]);
});
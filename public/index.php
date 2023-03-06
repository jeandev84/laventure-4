<?php


use Lexus\Component\Database\ORM\Manager;
use Lexus\Component\Routing\Router;

require_once realpath(__DIR__.'/../vendor/autoload.php');


$router = new \Lexus\Component\Routing\Router();
$router->domain('http://127.0.0.1:8000');
$router->namespace('App\\Http\\Controller');
$router->patterns([
    'id'      => '\d+',
    'lang'  => '\w+',
]);

/*
$router->middlewares([
    'auth'  => \App\Middleware\AuthenticatedMiddleware::class,
    'guest' => \App\Middleware\GuestMiddleware::class,
    'foo'   => \App\Middleware\FooMiddleware::class
]);
*/


$router->get('/', function () {
   return "Welcome";
})
->name('welcome')
->middleware(['auth', \App\Middleware\BarMiddleware::class]);


$router->group([
    'prefix' => '/admin',
    'module' => 'Admin',
    'name' => 'admin.'
], function (Router $router) {
     $router->get('/', [\App\Http\Controller\Admin\DashboardController::class, 'index'])->name('dashboard');
});


/*
$router->map(['GET', 'POST'], '/contact-us', function () {

     $html[] = '<form method="POST" action="/contact-us">';
     $html[] = '<div>';
     $html[] = '<input type="text" name="username" placeholder="Username">';
     $html[] = '</div>';
     $html[] = '<div>';
     $html[] = '<input type="email" name="email" placeholder="Email">';
     $html[] = '</div>';
     $html[] = '<div>';
     $html[] = '<input type="password" name="password" placeholder="Password">';
     $html[] = '</div>';
     $html[] = '<button type="submit">Submit</button>';
     $html[] = '</form>';

     return join("\n", $html);

})->name('contact.us');

$router->get('/front', [\App\Http\Controller\FrontController::class])->name('front.invoke');
$router->get('/front/index', [\App\Http\Controller\FrontController::class, 'index'])->name('front.index');
$router->get('/front/contact', [\App\Http\Controller\FrontController::class, 'contact'])->name('front.contact');


$router->resource('post', 'PostController');
$router->resource('post', \App\Http\Controller\PostController::class);
*/


dump($router->getRoutes(), $router->collection()->getNames());


try {

    $response = $router->dispatchRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

    echo new \App\Http\Response($response);

} catch (Exception $exception) {

    dd($exception);
}

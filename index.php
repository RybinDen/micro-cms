<?
define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/micro-cms/', 'Controller:index');
$r->addRoute('GET', '/micro-cms/contacts', 'Controller:contacts');
$r->addRoute('GET', '/micro-cms/about', 'Controller:about');
});
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
(new Controller())->notFound();
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
echo 'метод не найден';
        break;
    case FastRoute\Dispatcher::FOUND:
$hendl = explode(':', $routeInfo[1]);
$controller = $hendl[0];
    $method = $hendl[1];
    $vars = $routeInfo[2];

    $controller = new $controller;
    $controller->$method($vars);
break;
}

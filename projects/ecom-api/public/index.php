<?php 
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Database;
use Core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(
    dirname(__DIR__)
);

$dotenv->load();


$app = require dirname(__DIR__) . '/config/app.php';

$databaseConfig = require dirname(__DIR__) . '/config/database.php';

$database = new Database($databaseConfig);

$pdo = $database->connection();

// Test query 
$result = $pdo->query('SELECT 1');

// Routers 
$router = new Router();

require dirname(__DIR__) . '/routes/api.php';

$method = $_SERVER['REQUEST_METHOD'];

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$url = parse_url($requestUri, PHP_URL_PATH) ?? '/';

$basePath = "/php/projects/ecom-api/public";

if (str_starts_with($url, $basePath)) {
    $url = substr($url, strlen($basePath));
}

$url = $url ?: '/';


var_dump([
    'method' => $method,
    'requesturl' => $requestUri,
    'url' => $url
]);

exit;

$routerRslt = $router->dispatch($method, $url);

header('Content-Type: application/json');
echo json_encode($routerRslt);







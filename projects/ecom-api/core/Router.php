<?php 
declare(strict_types=1);

namespace Core;

class Router 
{
    private array $routes = [];

    public function get(string $url, callable|array $action): void
        {
            $this->addRoute('GET', $url, $action);
        }

    public function post(string $url, callable|array $action): void
        {
            $this->addRoute('POST', $url, $action);
        }

    public function put(string $url, callable|array $action): void
        {
            $this->addRoute('PUT', $url, $action);
        }
    
    public function delete(string $url, callable|array $action): void
        {
            $this->addRoute('DELETE', $url, $action);
        }

    private function addRoute(
        string $method,
        string $url,
        callable|array $action
    ): void
        {
            $this->routes[$method][$url] = $action;
        }

    public function dispatch(string $method, string $url): mixed
        {
            $action = $this->routes[$method][$url] ?? null;

            if ($action === null) {
                http_response_code(404);

                return [
                    'message' => 'Route not found !'
                ];
            }

            return call_user_func($action);
            
        }

}




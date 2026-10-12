<?php

use Core\Router;

$router->get(
    '/api/v1/products',
    function () {
        return ['msg' => 'Product list!'];
    }
);



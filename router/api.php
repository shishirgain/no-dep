<?php
use Dep\router\Router;

Router::get('/api', function () {
    JSON(['route' => 'index']);
});

Router::get('/api/users', function () {
    JSON(['route' => '/users', 'params' => getPrams()]);
});

Router::get('/api/users/{id}', function ($id) {
    echo '/users/{id}-' . $id;
});

Router::get('/api/users/show', function ($id) {
    echo 'users-' . $id;
});

Router::post('/api/users/{id}', function ($id) {
    echo 'users-' . $id;
});

Router::get('/api/users/{id}/show/{slug}', function ($id, $slug) {
    echo 'users-' . $id . '--' . $slug;
});

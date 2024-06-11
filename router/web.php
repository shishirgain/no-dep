<?php
use Dep\router\Router;

Router::get('/', function () {
   VIEW('home');
});
Router::get('/about', function () {
   VIEW('about');
});

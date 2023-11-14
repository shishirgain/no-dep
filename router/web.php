<?php
use App\Models\Helper\Path;

$paths = [
    new Path('/', '/views/home.php'),
    new Path('/about', '/views/about.php'),
];

function route($url)
{
    global $paths;
    foreach ($paths as $path) {
        if ($url === $path->getPath()) {
            return $path;
        }
    }
    return new Path('*', '/views/Error404.php');
}

$url = $_SERVER['REQUEST_URI'];

include(route($url)->getView());

<?php

require __DIR__ . '/config.php';
require __DIR__ . '/helpers.php';
require __DIR__ . '/vendor/autoload.php';

use Windwalker\Renderer\BladeRenderer;

//Init Blade renderer
$paths = array(__DIR__ . '/views');
$renderer = new BladeRenderer($paths, array('cache_path' => __DIR__ . '/cache'));

//Load page based on uri
$path = isset($_GET['uri']) ? $_GET['uri'] : 'index';
require __DIR__ . '/pages/' . $path . '.php';

//Render page
$page = new Page();
echo $page->show($renderer);

<?php

require __DIR__ . '/config.php';
require __DIR__ . '/helpers.php';
require __DIR__ . '/vendor/autoload.php';

use Windwalker\Renderer\BladeRenderer;

//Init Blade renderer
$paths = array(__DIR__ . '/views');
$renderer = new BladeRenderer($paths, array('cache_path' => __DIR__ . '/cache'));

//Load page based on uri
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$path = substr($url, strrpos($url, '/') + 1);
if (empty($path)) {
	$path = "index";
} 
require __DIR__ . '/pages/' . $path . '.php';

//Render page
$page = new Page();
echo $page->show($renderer);

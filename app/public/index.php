<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: *");

session_start();
require __DIR__ . '/../routers/patternrouter.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = new PatternRouter();
$router->route($uri);
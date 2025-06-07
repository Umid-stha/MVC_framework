<?php  

// This is the main entry point of the application
// Include the necessary files

require_once __DIR__ . '/vendor/autoload.php';
use app\core\Application;

$app = new Application();


$app -> router -> get('/', function() {
    return 'Welcome to the Home Page!';
});

$app -> run();
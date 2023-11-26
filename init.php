<!-- init.php -->
<?php
// Elérési út beállítása a controllerekhez
$controllerPath = 'app/controllers/';
include 'system/config.php';
include 'route.php';

// Error reporting bekapcsolása
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ellenőrizze, hogy létezik-e a controller fájl és include-olja azt
function includeControllers($controllerPath) {
    // Ellenőrizzük az összes fájlt a megadott könyvtárban
    $controllers = glob($controllerPath . '*.php');
    
    foreach ($controllers as $controller) {
        include $controller;
    }
}
?>
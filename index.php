<?php 

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'caches',
    'auto_reload' => true
]);

echo $twig->render('landing.html', ['name' => 'Vicky']);

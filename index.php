<?php 

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'caches',
    'auto_reload' => true,
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$packages = file_get_contents("prices.json");

echo $twig->render('landing.html', ['packages' => json_decode($packages)]);

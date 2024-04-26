<?php
echo "test index-2";
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, []);

$template = $twig->load('templates_002.html');
echo $template->render( ['the' => 'variables', 'go' => 'here']);
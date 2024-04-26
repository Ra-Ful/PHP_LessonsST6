<?php
echo "test index-1";
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, []);

$template = $twig->load('template_001.html');
echo $template->render( ['the' => 'variables', 'go' => 'here']);
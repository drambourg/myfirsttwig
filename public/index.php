<?php

require '../vendor/autoload.php';

$loader =new Twig_Loader_Filesystem(__DIR__ . '/../src/View');
$Twig = new Twig_Environment($loader);


$products = ['Badge WCS', 'Mug WCS', 'T-Shirt WCS', 'Sticker WCS', 'Slipper WCS'];

echo $Twig->render('index.html.twig',[
        'title' => 'My TWIG is better !!',
        'products' => $products]);
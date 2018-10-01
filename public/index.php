<?php
// chargement de l'autoload en début de fichier
require __DIR__ . '/../vendor/autoload.php';
//...
use Controller\ItemController;

$item1 =new ItemController();
$item = $item1->index();


<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

session_start();

$smarty = new Smarty();
$smarty->caching = true;

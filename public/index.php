<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

echo "O: Open-Closed Principle<br><br>";

//$logger = new \App\DBLogger;
$logger = new \App\MongoLogger;

$product = new \App\Product($logger);

$product->setPrice(1000);
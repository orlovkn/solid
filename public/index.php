<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

echo "D: Dependency Inversion Principle <br><br>";


$mmongo = new \App\MongoDBConnection;
//$mysql = new \App\MySQLConnection;
$password = new \App\PasswordReminder($mmongo);

var_dump($password->connection());
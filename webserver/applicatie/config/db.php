<?php

// Legt niet-geheime instellingen vast voor de verbinding met de RDBMS.

declare(strict_types=1);

define('DB_HOST', 'rdbms');
define('DB_DATABASE', 'Movies');
define('DB_LOGIN', 'applicatie');
define('DB_PASSWORD', 'testpassword!Hallo-1244!'); // file("/run/secrets/password_rdbms_app")[0]

$serverName = DB_HOST;
$uid = DB_LOGIN;
$pwd = DB_PASSWORD;
$databaseName = DB_DATABASE;

$conn = new PDO("sqlsrv:Server={$serverName};Database={$databaseName}", $uid, $pwd);

if(!$conn){
  echo "unable to connect to database.";
}

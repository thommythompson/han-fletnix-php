<?php

// Legt niet-geheime instellingen vast voor de verbinding met de RDBMS.

declare(strict_types=1);

$serverName = 'rdbms';
$uid = 'applicatie';
$pwd = rtrim(file_get_contents('/run/secrets/password_rdbms_app', true));
$databaseName = 'Movies';

$conn = new PDO("sqlsrv:Server={$serverName};Database={$databaseName}", $uid, $pwd);

if (!$conn) {
    echo "unable to connect to database.";
}

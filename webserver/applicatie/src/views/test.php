<?php
// print_r(PDO::getAvailableDrivers());
// phpinfo();

$serverName = DB_HOST;
$uid = DB_LOGIN;
$pwd = DB_PASSWORD;
$databaseName = DB_DATABASE;

$conn = new PDO("sqlsrv:Server={$serverName};Database={$databaseName}", $uid, $pwd);

$sql = "SELECT TOP 5 * FROM Genre";
foreach ($conn->query($sql) as $row) {
  print $row['genre_name'] . "\t";
  print $row['description'] . "\t";
}

?>

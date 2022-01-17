
<?php

$db_username = 'Eph2RPFR5M'; // Your MYSQL Username.
$db_password = 'F4s6Q1D7ZU'; // Your MYSQL Password.
$db_name = 'Eph2RPFR5M'; // Your Database name.
$db_host = 'remotemysql.com';

$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or
die('Error: Could not connect to database.');

?>

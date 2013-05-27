<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'YOUR_DB_USERNAME');
define('DB_PASSWORD', 'YOUR_DB_PASSWORD');
define('DB_DATABASE', 'YOUR_DB_NAME');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>

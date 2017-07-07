<?php
define('DB_HOST','localhost: 8889');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','amazon_mini');

//connection to the database

$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysqli_error());


?>
<?php
$servername = "localhost";
$database = "suhu123";
$username = "root";
$password = "";
$konek = mysqli_connect ($servername, $username, $password);
$db = mysqli_select_db ($konek, $database);

?>
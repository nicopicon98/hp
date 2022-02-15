<?php

require 'config/connection.php';
$db = new basedatos;
$con = $db->conectar();

$username = "nicopicon98";
$email = "admin@harry_potter_vocabulary.virtual";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users(username, email, passwords) VALUES ('${username}', '${email}', '${passwordHash}');";

$result = mysqli_query($con, $query);
echo "<pre>";
var_dump($result);
echo "</pre>";
exit;
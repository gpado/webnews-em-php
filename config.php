<?php
$servername = "localhost";
$database = "webnews";
$username = "root";
$password = "";
// Create connection
$conexao = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conexao);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$base="alabel";
// Create connection   -->BD senapractica3    persona (id, cedula, nombre, edad, genero)
$conn = new PDO($servername, $username, $password, $base);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully".' <br/>';
?>

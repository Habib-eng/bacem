<?php 

$dbConnexion = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bacem_db", "root", "");

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = ?";
$stmt = $dbConnexion->prepare($query);
$stmt->execute([$id]);
header('Location: index.php')
?>
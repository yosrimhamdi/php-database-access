<?php
$userName = $_POST["user_name"];
$userAge = $_POST["user_age"];

$sql = "INSERT INTO users(name, age) ";
$sql .= "VALUES(?, ?)";

$sql = "SELECT * FROM users";

$pdo = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$stmt = $pdo->prepare($sql);
$result = $stmt->execute();

print_r($stmt->fetchAll(PDO::FETCH_OBJ));

<?php

$con = mysqli_connect("localhost", "root", "", "testing");

$userName = $_POST["user_name"];
$userAge = $_POST["user_age"];

$sql = "INSERT INTO users(name, age) ";
$sql .= "VALUES(?, ?)";

$stmt = mysqli_stmt_init($con);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "si", $userName, $userAge);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

require __DIR__ . "/redirect.php";

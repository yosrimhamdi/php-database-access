<?php

$con = mysqli_connect("localhost", "root", "", "testing");

$userName = mysqli_real_escape_string($con, $_POST["user_name"]);
$userAge = mysqli_real_escape_string($con, $_POST["user_age"]);

$sql = "INSERT INTO users(name, age) ";
$sql .= "VALUES('$userName', $userAge)";

$result = mysqli_query($con, $sql);

require __DIR__ . "/redirect.php";

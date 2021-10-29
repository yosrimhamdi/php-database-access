<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "testing");

$userName = mysqli_real_escape_string($con, $_POST["user_name"]);
$userAge = mysqli_real_escape_string($con, $_POST["user_age"]);

$sql = "INSERT INTO users(name, age) ";
$sql .= "VALUES('$userName', $userAge)";

$result = mysqli_query($con, $sql);

if ($result) {
  $_SESSION["status"] = "success";
  $_SESSION["message"] = "all good man!";
} else {
  $_SESSION["status"] = "danger";
  $_SESSION["message"] = "something went wrong!";
}

header("Location: /");

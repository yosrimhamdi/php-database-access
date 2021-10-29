<?php

session_start();

if ($result) {
  $_SESSION["status"] = "success";
  $_SESSION["message"] = "all good man!";
} else {
  $_SESSION["status"] = "danger";
  $_SESSION["message"] = "something went wrong!";
}

header("Location: /");

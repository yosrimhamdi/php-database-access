<?php
session_start();

if (isset($_SESSION["status"])) {
  echo "<div class=\"alert alert-$_SESSION[status]\" role=\"alert\">";
  echo $_SESSION["message"];
  echo "</div>";
}

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    >
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    >
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    >
    <title>Document</title>
  </head>

  <body>
    <form
      action="/submit-prep-state.php"
      method="POST"
    >
      <p>User Name:</p>
      <input
        type="text"
        name="user_name"
      />
      <p>User Age:</p>
      <input
        type="text"
        name="user_age"
      />
      <button type="submit">submit</button>
    </form>
  </body>

</html>

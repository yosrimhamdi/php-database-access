<?php require_once __DIR__ . "/solver.php"; ?>

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
    <title>Test</title>
  </head>

  <body>
    <form
      action="/"
      method="POST"
    >
      <input
        type="text"
        name="equation"
      >
      <input
        type="submit"
        name="submit"
        value="submit"
      >
    </form>
    <script id="__bs_script__">
    //<![CDATA[
    document.write(
      "<script async src='http://HOST:3001/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>"
      .replace("HOST", location.hostname));
    //]]>
    </script>
  </body>

</html>

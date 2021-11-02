<?php
function pr($str) {
  echo "$str \n";
}

function solve($equation) {
  pr($equation);

  $equation = str_replace(" ", "", $equation);

  // preg_match_all("/([-+]?)(\d+)(x\^2|x|[-+]?|$)/", $equation, $parts);
  preg_match_all("/([-+]?)(\d+)x\^2/", $equation, $a);
  preg_match_all("/([-+]?)(\d+)x/", $equation, $b);
  preg_match_all("/([-+]?)(\d+)(|[-+]?|$)/", $equation, $c);

  echo "<pre>";
  print_r($a);
  echo "</pre>";
}

// solve("+343x^2 + 2x - 1");
solve("343x^2 + 2x - 1");
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
    <title>Document</title>
  </head>

  <body>
    <script id="__bs_script__">
    //<![CDATA[
    document.write(
      "<script async src='http://HOST:3001/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>"
      .replace("HOST", location.hostname));
    //]]>
    </script>
  </body>

</html>

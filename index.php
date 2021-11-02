<?php
function pr($str) {
  echo "$str \n";
}

function solve($equation) {
  pr($equation);

  $equation = str_replace(" ", "", $equation);

  preg_match_all("/([-+]?)(\d+)(x\^2|x|[-+]?|$)/", $equation, $parts);

  echo "<pre>";
  print_r($parts);
  echo "</pre>";
}

// solve("+343x^2 + 2x - 1");
solve("343x^2 + 2x - 1");

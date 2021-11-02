<?php
require_once __DIR__ . "/browser-sync.php";

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
solve("343x^2 + 4x - 1");

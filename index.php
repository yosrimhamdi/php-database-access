<?php
require_once __DIR__ . "/browser-sync.php";

function pr($str) {
  echo "$str <br>";
}

function evaluate($a, $b, $c) {
  $delta = sqrt($b) - 4 * $a * $c;
}

function getCoefficient($powerOf, $coefficients, $signs, $powerIndicator) {
  $indexOfCoefficient = array_search($powerOf, $powerIndicator);
  $coefficient = intval($coefficients[$indexOfCoefficient]);
  $sign = $signs[$indexOfCoefficient];

  if ($sign === "-") {
    return -1 * $coefficient;
  }

  return $coefficient;
}

function solveQuadraticEquation($equation) {
  pr($equation);

  $equation = str_replace(" ", "", $equation);

  preg_match_all("/([-+]?)(\d+)(x\^2|x|[-+]?|$)/", $equation, $parts);

  $signs = $parts[1];
  $coefficients = $parts[2];
  $powerIndicator = $parts[3];

  echo "<pre>";
  print_r($parts);
  echo "</pre>";

  $a = getCoefficient("x^2", $coefficients, $signs, $powerIndicator);
  $b = getCoefficient("x", $coefficients, $signs, $powerIndicator);
  $c = getCoefficient("", $coefficients, $signs, $powerIndicator);

  pr("a = $a");
  pr("b = $b");
  pr("c = $c");

  evaluate($a, $b, $c);
}

solveQuadraticEquation("8x^2 - 4x + 1");

<?php
function pr($str) {
  echo "$str <br>";
}

function evaluate($a, $b, $c) {
  $delta = $b ** 2 - 4 * $a * $c;

  if ($delta < 0) {
    pr("$delta < 0: no solution");
  } elseif ($delta === 0) {
    $x0 = -$b / (2 * $a);

    pr("double solution: x0 = $x0");
  } else {
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    $x2 = (-$b + sqrt($delta)) / (2 * $a);

    pr("first solution: x1 = $x1");
    pr("second solution: x2 = $x2");
  }
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

if (isset($_POST["submit"])) {
  solveQuadraticEquation($_POST["equation"]);
}

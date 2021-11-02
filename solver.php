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

// "/([-+]?)(\d+)?(x\^2|x|[-+]?|$)/"

function getA($equation) {
  preg_match("/([-+]?)(\d+)x\^2/", $equation, $parts);

  echo "<pre>";
  print_r($parts);
  echo "</pre>";

  if ($parts[1] === "-") {
    return -1 * intval($parts[2]);
  }

  return $parts[2];
}

function getB($equation) {
  // 3x^2 + 5 - 2x
  preg_match("/([-+]?)(\d+)x([^\^]|$)/", $equation, $parts);

  echo "<pre>";
  print_r($parts);
  echo "</pre>";

  if ($parts[1] === "-") {
    return -1 * intval($parts[2]);
  }

  return $parts[2];
}

function getC($equation) {
  preg_match("/([-+]?)[^\^](\d+)($|[-+])/", $equation, $parts);

  echo "<pre>";
  print_r($parts);
  echo "</pre>";

  if (!$parts) {
    return 0;
  }

  if ($parts[1] === "-") {
    return -1 * intval($parts[2]);
  }

  return $parts[2];
}

function solveQuadraticEquation($equation) {
  pr($equation);

  $equation = str_replace(" ", "", $equation);

  $a = getA($equation);
  $b = getB($equation);
  $c = getC($equation);

  pr("a = $a");
  pr("b = $b");
  pr("c = $c");

  evaluate($a, $b, $c);
}

solveQuadraticEquation("2x + 3x^2");

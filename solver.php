<?php
function evaluate($a, $b, $c) {
  $delta = $b ** 2 - 4 * $a * $c;

  if ($delta < 0) {
    echo "$delta < 0: no solution \n";
  } elseif ($delta === 0) {
    $x0 = -$b / (2 * $a);

    echo "double solution: x0 = $x0 \n";
  } else {
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    $x2 = (-$b + sqrt($delta)) / (2 * $a);

    echo "first solution: x1 = $x1 \n";
    echo "second solution: x2 = $x2 \n";
  }
}

function gelValue($equation, $regEx) {
  preg_match($regEx, $equation, $parts);

  if ($parts[1] === "-") {
    return -1 * intval($parts[2]);
  }

  return $parts[2];
}

function solveQuadraticEquation($equation) {
  $equation = str_replace(" ", "", $equation);

  $a = gelValue($equation, "/([-+]?)(\d+)x\^2/");
  $b = gelValue($equation, "/([-+]?)(\d+)x([^\^]|$)/");
  $c = gelValue($equation, "/([-+]?)[^\^](\d+)($|[-+])/");

  evaluate($a, $b, $c);
}

solveQuadraticEquation("4x  - 3x^2 - 1");

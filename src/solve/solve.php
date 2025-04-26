<?php
$equation = "X/8=6";

[$left, $right] = explode("=", $equation);
$left = trim($left);
$right = trim($right);

$right = (float)$right;

$operators = ['+', '-', '*', '/'];

foreach ($operators as $op) {
    if (strpos($left, $op) !== false) {
        $operator = $op;
        [$a, $b] = explode($operator, $left);
        $a = trim($a);
        $b = trim($b);
        break;
    }
}

if ($a === "X") {
    switch ($operator) {
        case '+': $x = $right - $b; break;
        case '-': $x = $right + $b; break;
        case '*': $x = $right / $b; break;
        case '/': $x = $right * $b; break;
    }
} else {
    switch ($operator) {
        case '+': $x = $right - $a; break;
        case '-': $x = $a - $right; break;
        case '*': $x = $right / $a; break;
        case '/': $x = $a / $right; break;
    }
}

echo "РЕЗУЛЬТАТ: X = $x\n";
?>
<img src="../../images/block_scheme.png" width="300px">

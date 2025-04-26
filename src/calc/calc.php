<?php

function isnum($x) {
    if (!$x) return false;
    if ($x[0] == '.' || $x[0] == '0') return false;
    if ($x[strlen($x) - 1] == '.') return false;
    for ($i = 0, $point_count = false; $i < strlen($x); $i++) {
        if ($x[$i] != '0' && $x[$i] != '1' && $x[$i] != '2' && $x[$i] != '3' &&
            $x[$i] != '4' && $x[$i] != '5' && $x[$i] != '6' && $x[$i] != '7' &&
            $x[$i] != '8' && $x[$i] != '9' && $x[$i] != '.') {
            return false;
        }
        if ($x[$i] == '.') {
            if ($point_count) return false;
            else $point_count = true;
        }
    }
    return true;
}

function calculate($val) {
    if (!$val) return 'Выражение не задано!';
    if (isnum($val)) return $val;

    $args = explode('+', $val);
    if (count($args) > 1) {
        $sum = 0;
        for ($i = 0; $i < count($args); $i++) {
            $arg = calculate($args[$i]);
            if (!isnum($arg)) return $arg;
            $sum += $arg;
        }
        return $sum;
    }

    $args = explode('*', $val);
    if (count($args) > 1) {
        $sup = 1;
        for ($i = 0; $i < count($args); $i++) {
            $arg = $args[$i];
            if (!isnum($arg)) return 'Неправильная форма числа!';
            $sup *= $arg;
        }
        return $sup;
    }

    return 'Недопустимые символы в выражении';
}

if (isset($_POST['expression'])) {
    $res = calculate($_POST['val']);
    if (isnum($res))
        echo 'Значение выражения: ' . $res;
    else
        echo 'Ошибка вычисления выражения: ' . $res;
}
?>

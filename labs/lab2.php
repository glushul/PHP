<?php

function evaluateExpression($expression) {
    try {
        if (empty($expression)) {
            throw new Exception("Empty expression");
        }

        $result = eval('return ' . $expression . ';');
        
        if ($result === false) {
            throw new Exception("Invalid expression");
        }

        return $result;
    } catch (Exception $e) {
        throw $e;
    }
}

if (isset($_POST['expression'])) {
    $expression = $_POST['expression'];

    $result = evaluateExpression($expression);

    echo json_encode(['result' => $result]);
}
?>
<?php
session_start();
if (!isset($_SESSION['opendate'])) {
    $_SESSION['opendate'] = date("H:i:s");
    echo $_SESSION['opendate'];
} else {
    $start = strtotime($_SESSION['opendate']);
    $now = time();
    $diff = $now - $start;
    echo "Прошло секунд: " . $diff;
}
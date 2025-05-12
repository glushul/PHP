<?php
session_start();
$_SESSION['test'] = 'Тест!';
echo $_SESSION['test'];
<?php
session_start();
echo 'Вы ввели страну: ' . htmlspecialchars($_SESSION['country']);
<?php

//var_dump($_GET['length']);

session_start();

if (isset($_SESSION['password'])) {
    $rdmPassword = $_SESSION['password'];
}

echo $rdmPassword;

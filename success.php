<?php

//var_dump($_GET['length']);

session_start();
var_dump($_SESSION['password']);
var_dump($_SESSION);


if (isset($_SESSION['password'])) {
    $rdmPassword = $_SESSION['password'];
}

echo $rdmPassword;

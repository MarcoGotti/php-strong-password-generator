<?php

require_once __DIR__ . '/logics/functions.php';

session_start();
$trimedInput = trim($_GET['length']);

if (checkNumber($trimedInput)) {

    $rdmPassword = '';
    $source = 'hlmnpqwyjxkzPQWYXJKZ0123456789@#*%&$=!+/';
    for ($i = 0; $i < round($trimedInput); $i++) {
        $n = rand(0, strlen($source) - 1);
        $rdmPassword = $rdmPassword . $source[$n];
    }

    session_unset();
    $_SESSION['password'] = $rdmPassword;
    header('Location: ./success.php');
} else {

    session_unset();
    $_SESSION['error'] = '';

    header('Location: ./index.php');
}

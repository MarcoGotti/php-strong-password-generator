<?php
require_once __DIR__ . '/logics/functions.php';

session_start();
$trimedInput = trim($_GET['length']);
$repeat = $_GET['repeat'];
$_SESSION['letters'] = $_GET['letters'];
$_SESSION['numbers'] = $_GET['numbers'];
$_SESSION['marks'] = $_GET['marks'];


//$rdmPassword = '';
$lettersSource = 'abcfhlmnpqwyjxkzABCFHPQWYXJKZ';
$numbersSource = '0123456789';
$marksSource = '£?><§-_@#*%&$=!+/*{}[]';
$source = genSource($lettersSource, $numbersSource, $marksSource);

if (checkNumber($trimedInput)) {

    if ($repeat === 'on') {

        for ($i = 0; $i < round($trimedInput); $i++) {
            $n = rand(0, strlen($source) - 1);
            $rdmPassword .= $source[$n];
        }
    } else {
        //serve ciclo while
        for ($i = 0; $i < round($trimedInput); $i++) {
            $n = rand(0, strlen($source) - 1);

            if (!str_contains($rdmPassword, $source[$n])) {
                $rdmPassword .= $source[$n];
            }
        }
    }

    session_unset();
    $_SESSION['password'] = $rdmPassword;
    header('Location: ./success.php');
} else {

    session_unset();
    $_SESSION['error'] = '';
    header('Location: ./index.php');
}

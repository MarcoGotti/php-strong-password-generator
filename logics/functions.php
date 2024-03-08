<?php

var_dump($_GET['password']);

function rdmPassword()
{
    $trimedInput = trim($_GET['password']);

    if (!str_contains($trimedInput, ' ')) {

        $rdmPassword = '';
        $source = 'hlmnpqwyjxkzPQWYXJKZ0123456789@#*%&$=!+/';
        for ($i = 0; $i < strlen($trimedInput); $i++) {
            $n = rand(0, strlen($source) - 1);
            $rdmPassword = $rdmPassword . $source[$n];
        }
        return $rdmPassword;
    } /* elseif (strlen($trimedInput) === 0) {
        return '❔ enter a password';
    } */
    return '⚠ no spaces between types';
}

//var_dump(rdmPassword());

<?php

function rdmPassword()
{
    $trimedInput = trim($_GET['length']); //con milestone 3 si sistema perchè non sarà su pagina index

    if (empty($trimedInput)) {
        return ''; // ⚠ Type a number

    } elseif (

        is_numeric($trimedInput) &&
        $trimedInput < 21 &&
        $trimedInput > 7 &&
        !str_contains($trimedInput, ' ')
    ) {

        $rdmPassword = '';
        $source = 'hlmnpqwyjxkzPQWYXJKZ0123456789@#*%&$=!+/';
        for ($i = 0; $i < round($trimedInput); $i++) {
            $n = rand(0, strlen($source) - 1);
            $rdmPassword = $rdmPassword . $source[$n];
        }
        return $rdmPassword;
    }
    return '⚠ type a number between 8 and 20';
}


//var_dump(rdmPassword());

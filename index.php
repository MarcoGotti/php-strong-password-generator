<?php
/* Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php */

var_dump($_GET['password']);

function rdmPassword()
{
    $rdmPassword = '';
    $source = 'hlmnpqwyjxkzPQWYXJKZ0123456789@#*%&$=!+/';
    for ($i = 0; $i < strlen(trim($_GET['password'])); $i++) {
        $n = rand(0, strlen($source) - 1);
        $rdmPassword = $rdmPassword . $source[$n];
    }
    return $rdmPassword;
}

//var_dump(rdmPassword());



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form action="" method="get">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" />
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>

        <div class="text-center">Generated password: <h4><?= rdmPassword() ?></h4>
        </div>
    </div>


</body>

</html>
<?php

session_start();

//var_dump($_SESSION);
//var_dump($_GET);

include __DIR__ . '/logics/functions.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <header class="container text-center text-white pt-5 pb-2">
        <h1 class="text-warning">Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </header>

    <main>
        <?php if (isset($_SESSION['error'])) : ?>
            <section>
                <div class="container">
                    <div class="alert alert-warning" role="alert">
                        <strong>Not valid parameters</strong>
                    </div>

                </div>
            </section>
        <?php endif ?>

        <div class="container">
            <section class="bg-white p-5">

                <form action="./server.php" method="get">
                    <div class="d-flex justify-content-evenly mb-2">
                        <div>Password length</div>
                        <div class="col-2">
                            <input type="text" class="form-control-sm me-5 d-block" name="length" id="length" placeholder="Type a number" />
                            <small id="lengthHelpId" class="<?= error() ?>">A number between 8 and 20</small>
                        </div>

                    </div>
                    <div class="d-flex justify-content-evenly mb-2 ">
                        <div>Allow characters to repeat</div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="repeat" id="repeat1" checked>
                                <label class="form-check-label" for="repeat1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="off" name="repeat" id="repeat2">
                                <label class="form-check-label" for="repeat2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-evenly">
                        <div>Pick your preferences</div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="letters" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Letters
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="numbers" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Numbers
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="marks" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Marks
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- serve button Annulla campi. Con eventClick -->
                    <button type="submit" class="btn btn-warning mt-3">Send</button>
                </form>

            </section>
        </div>
    </main>


</body>

</html>
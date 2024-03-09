<?php
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

<body>
    <div class="container d-flex justify-content-center ">
        <section class="col-4">

            <form action="" method="get"><!-- action="success.php" -->
                <div class="mb-3">
                    <label for="length" class="form-label">Length</label>
                    <input type="text" class="form-control" name="length" id="length" placeholder="" />
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>

            <div class="text-center">Generated password: <h4><?= rdmPassword() ?></h4>
            </div>

        </section>
    </div>


</body>

</html>
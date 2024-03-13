<?php

//var_dump($_GET['length']);

session_start();
var_dump($_SESSION['password']);
var_dump($_SESSION);

if (isset($_SESSION['password'])) {
    $rdmPassword = $_SESSION['password'];
}
include __DIR__ . '/layouts/head.php';



//echo $rdmPassword;
//var_dump($rdmPassword);

?>

<div class="text-center">

    <h4>
        Your generated Password:
    </h4>
    <div><?= $rdmPassword ?></div>
</div>



</section>
</div>
</main>


</body>

</html>
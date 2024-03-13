<?php

session_start();
//var_dump($_SESSION);

if (isset($_SESSION['password'])) {
    $rdmPassword = $_SESSION['password'];
}

include __DIR__ . '/layouts/head.php';


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
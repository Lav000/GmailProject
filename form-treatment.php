<?php
    session_start();
    //Genere un token CSRF puis le stock dans la session
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;

    include_once __DIR__ ."/include/head.inc.php";
?>
<body>
    <?php include_once __DIR__ ."/include/header.inc.php"; ?>
    <section class="createaccount visible form-action" role="group" aria-labelledby="form">
        <p class="warning-connection">
            <?php
            include_once __DIR__ . "/controller/registration.class.php";
            registration::user_registed();
            ?>
        </p>
    </section>
</body>


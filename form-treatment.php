<?php
session_start();
    include_once __DIR__ ."/include/head.inc.php";
?>
<body>
    <?php include_once __DIR__ ."/include/header.inc.php"; ?>
    <main>
        <section class="form-action" role="group" aria-labelledby="form">
            <p class="warning-connection">
                <?php
                include_once __DIR__ . "/controller/registration.class.php";
                registration::user_registed();
                ?>
            </p>
        </section>
    </main>
</body>


<?php

    session_start();

    include_once __DIR__ ."/controller/config.inc.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <!-- HEAD -->
    <?php
        include_once __DIR__. '/include/head.inc.php'
    ?>
    <body>
        <!-- HEADER -->
        <?php
            include_once __DIR__. '/include/header.inc.php'
        ?>
        <!-- MAIN -->
        <?php
            include_once __DIR__. '/include/main.inc.php'
        ?>
    </body>
</html>
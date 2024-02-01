<?php
    <main>
        <div id="arrow">
            <a href="#ap">
                <img
                src="asset/arrow.png" alt="flèche remonte page"
                >
            </a>
        </div>
        <a id="btntop" href="index.html">
            <img 
                src="asset/arrow.png"
                alt="flèche pour monter en haut de page"
            >
        </a>
        <section class="accueilpage" id="ap">
            <h1>
                Retrouvez la fluidité et la <br>
                simplicité de Gmail sur <br>
                tous vos appareil<br>
            </h1>
            <div>
                <a href="#1" id="btncreateaccount" class="PageChanger">créer un compte</a>
            </div>
        </section>
        <section class="createaccount visible" id="1">
            <h2>
                Une boîte de réception<br>
                entièrement repensée
            </h2>
            <p>
                Avec les nouveaux onglets personnalisables, repérez<br>
                immédiatement les nouveaux messages et choisissez<br>
                ceux que vous souhaitez lire en priorité.
            </p>
            /* INCLUDE FORMULAIRE */
            <?php
                include_once __DIR__. './form.inc.php'
            ?>
        </section>
    </main>
?>
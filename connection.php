<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <meta name="description" content="Description de la page">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navp2.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div>
        <img
            src="asset/images.png"
            alt="logo gmail"
        >
        <h1>
            Gmail
        </h1>
    </div>
    <ul>
        <li id="pp">
            <a href="">pour les pro</a>
        </li>
        <li id="c">
            <a href="#2" class="PageChanger">connexion</a>
        </li>
        <li id="cc" class="PageChanger">
            <a href="index.html">créer un compte</a>
        </li>
    </ul>
</header>
<main>
    <div id="arrow">
        <a href="#2">
            <img
                src="asset/arrow.png" alt="flèche remonte page"
            >
        </a>
    </div>
    <section class="connection" id="2">
        <h3>Bienvenue dans votre espace</h3>
        <form action="" method="get">
            <fieldset>
                <legend>Connectez-vous à votre compte</legend>
                <div class="field">
                    <label for="email">Mail*</label><br>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>
                </div >
                <div class="field">
                    <label for="password">Choisir votre mot de passe*</label><br>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div id="btnvaccount">
                    <input type="submit" class="btnsubmit" value="valider votre compte">
                </div>
            </fieldset>
        </form>
    </section>
</main>
<footer>
</footer>
</body>
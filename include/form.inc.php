<?php
    //Genere un token CSRF puis le stock dans la session
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
?>
<form action="form-treatment.php" method="post">
    <fieldset>
        <legend>Créer un compte</legend>
        <div class="field">
            <label for="lastname">Nom*</label><br>
            <input type="text" id="lastname" name="nom_utilisateur" placeholder="Votre nom" required pattern="[a-zA-Z]+" maxlength="30">
        </div>
        <div class="field">
            <label for="firstname">Prénom*</label><br>
            <input type="text" id="firstname" name="prenom_utilisateur" placeholder="Votre prenom" required pattern="[a-zA-Z]+" maxlength="30">
        </div>
        <div class="field">
            <label for="email">Mail*</label><br>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
            <input type="hidden" name="csrf_token" value="<?= $token; ?>"
        </div>
        <div class="field">
            <label for="password">Choisir votre mot de passe*</label><br>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </div>
        <div id="btnvaccount">
            <input type="submit" class="btnsubmit" value="valider votre compte">
        </div>
    </fieldset>
</form>
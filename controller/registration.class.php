<?php
class registration{
    static function user_registed()
    {
        //Verification que le token est bien le même que celui de session et que tous les champs sont remplis.
        if(isset($_POST['csrf_token']) &&
            isset($_SESSION['csrf_token']) &&
            $_POST['csrf_token'] === $_SESSION['csrf_token'])
        {
            //Enregistrement du formuaire dans les variables avec la fonction strip_tags pour éviter les push xss
            $_firstname = strip_tags($_POST['prenom_utilisateur']);
            $_lastname = strip_tags($_POST['nom_utilisateur']);
            $_login = strip_tags($_POST['email']);
            $_pass = $_POST['password'];

            //Expression régulière pour obliger l'utilisateur à mettre un mot de passe plus robuste
            $regex = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

            //Test de la bonne saisie du mdp
            $_login && $_pass && preg_match($regex, $_pass)? print "Bonjour ".$_firstname.", votre inscription est validée 🔐" :
                print "Erreur de saisie, veuilez recommencer. <a href=\"index.php\">Essayer encore</a>";

            print "<br>Connexion sécurisé 🔒️";

            //Supprime le jeton après utilisation
            unset($_SESSION['csrf_token']);
        }
        else{
            print "Invalid token ❌";
        }
    }
}
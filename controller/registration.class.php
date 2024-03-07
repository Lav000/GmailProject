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
            $_email = strip_tags($_POST['email']);
            $_pass = $_POST['password'];

            //Verification des champs saisies:
            if(empty($_firstname) && empty($_lastname) && empty($_email) && empty($_pass)){
                print "Veuillez saisir un Nom, Prénom et email.";
            }
            else{
                print "Bonjour ".$_firstname.", votre inscription est validée 🔐";
            }

            //Supprime le jeton après utilisation
            unset($_SESSION['csrf_token']);
        }
        else{
            print "Invalid token ❌";
        }
    }
}
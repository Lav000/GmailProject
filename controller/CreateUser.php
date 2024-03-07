<?php
class CreateUser {


    static function insertUser() {
        include_once "registration.class.php";

        //DataBase settings
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dataBaseName = "secretbdd_user";

        try {
            // Connexion à la base de données avec PDO
            $connexion = new PDO("mysql:host=$server;dbname=$dataBaseName", $user, $pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $lastName = strip_tags($_POST["nom_utilisateur"]);
                $firstName = strip_tags($_POST["prenom_utilisateur"]);
                $email = strip_tags($_POST["email"]);
                $password = strip_tags($_POST["password"]);

                // Verification de l'existance du user
                $requeteVerif = $connexion->prepare("SELECT id FROM utilisateurs WHERE email = ?");
                $requeteVerif->bindParam(1, $email);
                $requeteVerif->execute();

                if ($requeteVerif->rowCount() > 0) {
                    print '<p class="warning msg-alert">Cette adresse e-mail est déjà enregistrée.</p>';
                }
                else
                {
                    if (!empty($lastName) && !empty($firstName) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        // Requet envoyé à la bdd
                        $requete = $connexion->prepare("INSERT INTO utilisateurs (Nom, Prenom, email , mot_de_passe) VALUES (?, ?, ?, ?)");

                        // Binder les paramètres
                        $requete->bindParam(1, $lastName);
                        $requete->bindParam(2, $firstName);
                        $requete->bindParam(3, $email);
                        $requete->bindParam(4, $passwordHash);

                        $requete->execute();


                        print '<p class="warning msg-success">Bravo '.$firstName.' : Enregistrement réussi !</p>';

                    } else {
                        print '<p class="warning msg-alert">Tous les champs sont obligatoires ou mail invalide</p>';
                    }
                }

                // Fermer la connexion
                $connexion = null;
            }
        } catch (PDOException $e) {
            echo '<p class="warning msg-alert">Erreur de connexion à la base de données : </p>' . $e->getMessage();
        }
    }
}

// Utilisation
CreateUser::insertUser();
?>
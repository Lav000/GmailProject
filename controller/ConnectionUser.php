<?php
class ConnectionUser {
    static function requestConnection() {
        include_once "registration.class.php";

        //DataBase settings
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dataBaseName = "secretbdd_user";

        try{
            //connexion with PDO
            $connection = new PDO("mysql:host=$server;dbname=$dataBaseName", $user, $pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = strip_tags($_POST["email"]);
                $password = strip_tags($_POST["password"]);

                //Email check
                $requetEmailVerif = $connection->prepare("SELECT id FROM utilisateurs WHERE email = ?");
                $requetEmailVerif->bindParam(1, $email);
                $requetEmailVerif->execute();
                $emailExists = $requetEmailVerif->fetchColumn();

                if($emailExists === false){
                    print "Cet email n'est relié à aucun compte.";
                } else {
                    //Password check
                    $requetPassVerif = $connection->prepare("SELECT mot_de_passe FROM utilisateurs WHERE email = ?");
                    $requetPassVerif->bindParam(1, $email);
                    $requetPassVerif->execute();
                    $storedPasswordHash = $requetPassVerif->fetchColumn();

                    if(password_verify($password, $storedPasswordHash)){
                        print "Connexion réussie !";
                    } else {
                        print "Mot de passe incorrect. Veuillez réessayer.";
                    }
                }
            }

            $connection = null;
        }
        catch (PDOException $e) {
            echo '<p class="warning msg-alert">Erreur de connexion à la base de données : </p>' . $e->getMessage();
        }
    }
}

ConnectionUser::requestConnection();
?>

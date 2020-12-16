<?php
        $nom                    = $_POST['nom'];
        $prenom                 = $_POST['prenom'];
        $sexe                   = $_POST['sexe'];
        $nationalite            = $_POST['nationalite'];
        $date_naissance         = $_POST['date_naissance'];
        $pays                   = $_POST['pays'];
        $profession             = $_POST['profession'];
        $lieu_residense         = $_POST['lieu_residense'];
        $email                  = $_POST['email'];
        $numero_telephone       = $_POST['numero_telephone'];
        $situation_matrimoniale = $_POST['situation_matrimoniale'];
        $nombre_enfants         = $_POST['nombre_enfants'];
        $nom_pere               = $_POST['nom_pere'];
        $nom_mere               = $_POST['nom_mere'];

        /**
         * Connexion DB
         */
        include('connexion.php');

        $sql = "INSERT INTO casier(
            nom, prenom, sexe, nationalite , date_naissance , pays, profession, lieu_residence,
            email, numero_telephone, situation_matrimoniale,nombre_enfants,nom_pere,nom_mere)
        VALUES (?, ?, ?, ? , ? , ? , ? , ?, ? , ? , ? , ? , ? , ?) ";

        $connexion->prepare($sql)->execute([$nom, $prenom, $sexe, $nationalite , $date_naissance , $pays , $profession , $lieu_residense,
        $email , $numero_telephone , $situation_matrimoniale , $nombre_enfants , $nom_pere , $nom_mere]);

        header("Location: affichage.php");

       /* For create table casier
       CREATE TABLE `casier` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `nom` varchar(30) DEFAULT NULL,
            `prenom` varchar(30) DEFAULT NULL,
            `sexe` varchar(30) DEFAULT NULL,
            `nationalite` varchar(30) DEFAULT NULL,
            `date_naissance` date DEFAULT NULL,
            `pays` varchar(30) DEFAULT NULL,
            `profession` varchar(30) DEFAULT NULL,
            `lieu_residence` varchar(30) DEFAULT NULL,
            `email` varchar(30) DEFAULT NULL,
            `numero_telephone` varchar(30) DEFAULT NULL,
            `situation_matrimoniale` varchar(30) DEFAULT NULL,
            `nombre_enfants` varchar(30) DEFAULT NULL,
            `nom_pere` varchar(30) DEFAULT NULL,
            `nom_mere` varchar(30) DEFAULT NULL,
            PRIMARY KEY (`ID`)
            ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;*/
?>


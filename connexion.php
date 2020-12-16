<?php
    /**
     * Connexion DB
     */
    $dsn="mysql:dbname=casier_judiciaire;host=127.0.0.1";
    try{
        $connexion=new PDO($dsn,'root','');        
    }
    catch(PDOException $e){
        printf("Échec de la connexion : %s\n", $e->getMessage());
    }
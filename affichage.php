<?php
    include('connexion.php');
    $sql="SELECT * from casier";
       /* if(!$connexion->query($sql)) echo "Pb d'accès au CARNET";
        else{
        foreach ($connexion->query($sql) as $row){}
        /*echo $row['PRENOM']." ".
            $row['NOM']."né(e) le ".
            $row['NAISSANCE']."<br/>\n";*/
        //}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="row mt-3 mb-3">
        <div class="col-md-12 text-right">
            <a href="form.php" class="btn btn-info" >Effectuer et nouvel enrégistrement</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Nationalité</th>
                <th>Date de naissance</th>
                <th>Pays</th>
                <th>Profession</th>
                <th>Lieu de residense</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Situation matrimoniale</th>
                <th>Nombre d'enfant</th>
                <th>Nom du père</th>
                <th>Nombre de la mère</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $n = 1;
            if(!$connexion->query($sql)) echo "Pb d'accès au CARNET";
            else{
                foreach ($connexion->query($sql) as $row) 
                { 
        ?>
                    <tr>
                        <td><?php  echo $n++; ?></td>
                        <td> <?php echo $row['nom']; ?> </td>
                        <td> <?php echo $row['prenom']; ?> </td>
                        <td> <?php echo $row['sexe']; ?> </td>
                        <td> <?php echo $row['nationalite']; ?> </td>
                        <td> <?php echo $row['date_naissance']; ?> </td>
                        <td> <?php echo $row['pays']; ?> </td>
                        <td> <?php echo $row['profession']; ?> </td>
                        <td> <?php echo $row['lieu_residence']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['numero_telephone']; ?> </td>
                        <td> <?php echo $row['situation_matrimoniale']; ?> </td>
                        <td> <?php echo $row['nombre_enfants']; ?> </td>
                        <td> <?php echo $row['nom_pere']; ?> </td>
                        <td> <?php echo $row['nom_mere']; ?> </td>
                    </tr>
        <?php } }?>
        </tbody>
    </table>
    
</body>
</html>
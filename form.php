<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="" style="padding: 20px;">
    <div class="row mt-3 mb-3">
        <div class="col-md-12 text-right">
            <a href="affichage.php" class="btn btn-info" >Voir enrégistrement</a>
        </div>
    </div>
    <form action="./traitement.php" method="POST">
        <div class="row ml-5 mr-5">
            <h1>Délivrance du Casier judiciaire (Extrait B3 du casier judiciaire)</h1>
            <div class="col-md-6 form-group">
                <label for="nom">Nom</label> <span>*</span> 
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="prenom">Prénom</label> <span>*</span> 
                <input type="text" name="prenom" id="prenom" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="sexe">Sexe</label> <span>*</span> 
                <select name="sexe" id="sexe" class="form-control">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Inconnu">Inconnu</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="nationalite">Nationalité</label> <span>*</span> 
                <select name="nationalite" id="nationalite" class="form-control">
                    <option value="Beninoise">Beninoise</option>
                    <option value="Afghanistane">Afghanistane</option>
                    <option value="Francaise">Française</option>
                    <option value="Americaine">Americaine</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="date_naissance">Date de naissance</label> <span>*</span> 
                <input type="date" name="date_naissance" id="date_naissance" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="pays">Pays</label> <span>*</span> 
                <select name="pays" id="pays" class="form-control">
                    <option value="Beninoise">Benin</option>
                    <option value="France">France</option>
                    <option value="USA">USA</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="profession">Profession</label> <span>*</span> 
                <input type="text" name="profession" id="profession" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="lieu_residense">Lieu de résidense</label> <span>*</span> 
                <input type="text" name="lieu_residense" id="lieu_residense" class="form-control">
            </div>
            <h2>Veuillez entrer une adresse mail valide. Votre casier judiciaire vous sera transmis par mail</h2>
            <div class="col-md-6 form-group">
                <label for="email">Email</label> <span>*</span> 
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="numero_telephone">Numéro de téléphone</label> <span>*</span> 
                <input type="text" name="numero_telephone" id="numero_telephone" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="situation_matrimoniale">Situation matrimoniale</label> <span>*</span> 
                <select name="situation_matrimoniale" id="situation_matrimoniale" class="form-control">
                    <option value="Célibataire">Célibataire</option>
                    <option value="Divocé(e)">Divocé(e)</option>
                    <option value="Marié(e)">Marié(e)</option>
                    <option value="Veuve">Veuve</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="nombre_enfants">Nombre d'enfants à charge</label> <span>*</span> 
                <input type="text" name="nombre_enfants" id="nombre_enfants" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="nom_pere">Nom et Prénoms du père</label> <span>*</span> 
                <input type="text" name="nom_pere" id="nom_pere" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="nom_mere">Nom et Prénoms du mère</label> <span>*</span> 
                <input type="text" name="nom_mere" id="nom_mere" class="form-control">
            </div>
            <h2>Veuillez fournir une copie de votre acte de naissance.</h2>
            <div class="col-md-6 form-group">
                <input type="file" name="acte_naissance " id="acte_naissance" class="form-control">
            </div>
            
        </div>

        <div class="row text-right">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Sauvegarder</button>
            </div>
        </div>

    
    </form>
</body>
</html>
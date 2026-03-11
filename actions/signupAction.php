<?php

require('actions/database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    //Je vérifie si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){

        // Données de user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //Je vérifie si user existe déjà sur le site 
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
        // Insertion du user dans la bdd
        $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, mdp)VALUES(?,?,?,?)');
        $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password ));
       
        // Récupération des informations du user
        $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?');
        $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo));

        // Récuperation des données qui ont été récuperées lors de la requete d'en haut !

        $usersInfos = $getInfosOfThisUserReq->fetch();

        //Authentification du user sur le site et récupération de ses données dans les variables globales sessions
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $usersInfos['id'];
        $_SESSION['lastname'] = $usersInfos['nom'];
        $_SESSION['firstname'] = $usersInfos['prenom'];
        $_SESSION['pseudo'] = $usersInfos['pseudo'];

        //Redirection de user vers la page d'accueil
        header('Location: index.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }
}else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
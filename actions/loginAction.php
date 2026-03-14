<?php 

require('actions/database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    //Je vérifie si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

        // Données de user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        //On vérifie si user existe(si le pseudo est correct)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0){

            //Récupération des données du user
            $usersInfos = $checkIfUserExists->fetch();

            //On vérifie si le mdp est correct
            if(password_verify($user_password, $usersInfos['mdp'])){

                //Authentification du user sur le site et récupération de ses données dans les variables globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['nom'];
                $_SESSION['firstname'] = $usersInfos['prenom'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];

                //On redirige user vers la page d'accueil
                header('Location: index.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre pseudo est incorrect...";
        }
}else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
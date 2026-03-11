<?php 

require('actions/database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    //Je vérifie si l'user a bien complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

        // Données de user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0){

            

        }else{
            $errorMsg = "Votre pseudo est incorrect...";
        }
}else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
<?php
try{
    session_start();
    $bdd = new PDO('mysql:host=127.0.0.1;port=3309;dbname=forum;charset=utf8;', 'root', '');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
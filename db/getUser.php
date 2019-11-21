<?php

try {
    //login de notre mysql pour autoriser la connexion à la db
    $dbuser="root";
    $dbpassword="0000";

    //créer une connexion à notre DB
    $db=new PDO("mysql:host=localhost;dbname=ItProject",$dbuser,$dbpassword);

    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
        
    //Requete sql pour afficher tous les utilisateurs
    $sql="SELECT username, password FROM User WHERE username='$_POST[username]' AND password='$_POST[password]'";

    //Faire en sorte que PDO prépare la requête sql
    $allUsers=$db->prepare($sql);

    //Exécuter notre requête sql
    $allUsers->execute();

    //Récupérer le contenu de la requête
    $allUsers=$allUsers->fetch();

    if ($allUsers==true) {
        session_start(); 
        $_SESSION["username"]=$_POST['username'];
        $_SESSION["password"]=$_POST['password']; 

        header('Location:../home.php');
    } else {

        header('location:../index.php');
    }
}
} catch (PDOException $e) {
    echo "Erreur !:$e->getMessage()<br/>";
    die();
}




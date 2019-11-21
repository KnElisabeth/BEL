<?php



//on veut réutiliser ces données en bdd
try {
    //login de notre mysql pour autoriser la connexion à la db
    $dbuser="root";
    $dbpassword="0000";
    
    //créer une connexion à notre DB
    $db=new PDO("mysql:host=localhost;dbname=ItProject",$dbuser,$dbpassword);
    
    //Requete sql pour insérer le nouvel utilisateur à partir du formulaire
    //pour éviter l'injection sql, les : sont là pour la sécurisation ainsi que la progression des lignes
    $sql="INSERT INTO User(username, password) VALUES (:username,:password)"; //on crée des données de substitution
    
    $createUser=$db->prepare($sql); //on prépare la requête
    
    $createUser->bindParam(":username",$_POST['username']);
    $createUser->bindParam(":password",$_POST['password']);//on lie ces données aux éléments du formulaire
    
    //Exécuter notre requête sql
    $createUser->execute();
    
    session_start(); 
    $_SESSION["username"]=$_POST['username'];
    $_SESSION["password"]=$_POST['password']; 
    header('Location:../home.php');

} catch (PDOException $e) {
    echo "Erreur !:$e->getMessage()<br/>";
    die();
}
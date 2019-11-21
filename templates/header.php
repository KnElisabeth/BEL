
<?php
session_start(); 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../css/style.css">
   <title>ItProject</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="../home.php"><img src="../img/home.png" class="home"></a> 
                <?php
                if (isset($_SESSION) && !empty($_SESSION)){
                    echo"<li>Bonjour, $_SESSION[username]</li>";                   
                }else{
                    header('Location:../index.php'); 
                }
                ?> 
                <a href='../logout.php'><img src='../img/logout.png' class='home'></a>      
            </ul>          
        </nav>
    </header>
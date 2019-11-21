
<link rel="stylesheet" href="css/style.css">

<body class="background">
    <div>
        <h1 class="register">Inscription</h1>
        <form method="POST" action="db/createUser.php" class="register">
            <label for="username"></label>
            <input type="text" placeholder="Identifiant" name="username" >
            <label for="password"></label>
            <input type="password" placeholder="Mot de passe" name="password" >
            <input type="submit" value="S'inscrire" >
        </form>
    </div>
</body>

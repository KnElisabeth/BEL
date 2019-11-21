<link rel="stylesheet" href="css/style.css">

<body class="background">
    <div class="div_register">
        <h1 class="register">Inscription</h1>
        <form method="POST" action="db/createUser.php">
            <label for="username"></label>
            <input type="text" class="register" placeholder="Identifiant" name="username" >
            <label for="password"></label>
            <input type="password" class="register" placeholder="Mot de passe" name="password" >
            <input type="submit" class="register" value="S'inscrire" >
        </form>
    </div>
</body>

<!doctype html>
<html lang="fr">

<head>
    <title>Runtrack3-Job1</title>
    <link rel="stylesheet" href="index.css">
    <!--
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        //couleur prersonnalisé avec tailwind            Nom    couleur  
        tailwind.config = { theme: { extend: { colors: { TEST: '#ffffac', } } } }
    </script>
-->
</head>

<body>
    <header>
        <h1>
            Hello world!
        </h1>
    </header>
    <div id="formulaire">
        <form action="" method="post">


            <div>
                <label for="civilité">civilité :</label><br>
                <input type="radio" id="madame" name="civilité" value="madame" checked required>
                <label for="madame">madame</label>

                <input type="radio" id="monsieur" name="civilité" value="monsieur" required>
                <label for="monsieur">monsieur</label>
            </div>

            <div>
                <label for="nom">Nom :</label><br>
                <input type="text" id="nom" name="nom" value="" required>
            </div>

            <div>
                <label for="prenom">prenom :</label><br>
                <input type="text" id="prenom" name="prenom" value="" required>
            </div>

            <div>
                <label for="adresse">adresse :</label><br>
                <input type="text" id="adresse" name="adresse" value="" required>
            </div>

            <div>
                <label for="email">email :</label><br>
                <input type="email" id="email" name="email" value="" required>
            </div>

            <div>
                <label for="password1">password :</label><br>
                <input type="password1" id="password1" name="password1" value="" required>
            </div>

            <div>
                <label for="password2">Confirmer password :</label><br>
                <input type="password2" id="password2" name="password2" value="" required>
            </div>

            <div>
                <label for="password2">Passions :</label><br>

                <input type="checkbox" id="informatique" name="informatique">
                <label for="informatique">informatique</label>
                <br>
                <input type="checkbox" id="voyages" name="voyages">
                <label for="voyages">voyages</label>
                <br>
                <input type="checkbox" id="sport" name="sport">
                <label for="sport">sport</label>
                <br>
                <input type="checkbox" id="lecture" name="lecture">
                <label for="lecture">lecture</label>
            </div>

            <div>

                <input type="submit" id="submit" name="submit" value="submit">
            </div>
        </form>
    </div>

    </div>



    <footer>
        <a href="index.php">Accueil</a><br>
        <a href="index.php">Inscription</a><br>
        <a href="index.php">Connexion</a><br>
        <a href="index.php">Rechercher</a>
    </footer>

</body>

</html>
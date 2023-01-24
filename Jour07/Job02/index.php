<!doctype html>
<html lang="fr">

<head>
    <title>Runtrack3-Job1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        //couleur prersonnalisé avec tailwind            Nom    couleur  
        tailwind.config = { theme: { extend: { colors: { TEST: '#ffffac', } } } }
    </script>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>



</head>

<body class="bg-blue-200">
    <!--   bg = background | p = padding | pt padding top | pb padding bottom | mb = margin bottom -->
    <header
        class="bg-white px-10 pt-8 pb-8 mb-10 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">

        <h1>
            Hello world!
        </h1>
    </header>
    <!--   width full  max width xs?-->
    <div class="w-full max-w-xs">
        <!--                            baground white | ombre |bord arrondis | padding sides 10(px ?) | padding top 8 | padding bottom 8 | margin bottom 10 -->
        <form action="" method="post" class="bg-white shadow-md rounded-xl px-10 pt-6 pb-8 mb-10">


            <div class="mb-4">
                
                <label class="block text-gray-700 text-sm font-bold mb-2" for="civilité">civilité :</label><ion-icon name="person-circle-outline"></ion-icon>
                <input type="radio" id="madame" name="civilité" value="madame" checked required>
                <label for="madame">madame</label>

                <input type="radio" id="monsieur" name="civilité" value="monsieur" required>
                <label for="monsieur">monsieur</label>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom :</label>
                <input class="shadow-md border-2 rounded-md" type="text" id="nom" name="nom" value="" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">prenom :</label>
                <input class="shadow-md border-2 rounded-md" type="text" id="prenom" name="prenom" value="" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="adresse">adresse :</label>
                <input class="shadow-md border-2 rounded-md" type="text" id="adresse" name="adresse" value="" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">email :</label>
                <input class="shadow-md border-2 rounded-md" type="email" id="email" name="email" value="" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password1">password :</label>
                <input class="shadow-md border-2 rounded-md" type="password" id="password1" name="password1" value=""
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password2">Confirmer password :</label>
                <input class="shadow-md border-2 rounded-md" type="password" id="password2" name="password2" value=""
                    required>
            </div>

            <label class="block text-gray-700 text-sm font-bold mb-2" for="password2">Passions :</label>
            <div class="shadow-md border-2 rounded-md mb-4">

                <input type="checkbox" id="informatique" name="informatique">
                <label for="informatique">informatique</label> <ion-icon name="desktop-outline"></ion-icon>
                <br>
                <input type="checkbox" id="voyages" name="voyages">
                <label for="voyages">voyages</label><ion-icon name="subway-outline"></ion-icon>
                <br>
                </ion-icon><input type="checkbox" id="sport" name="sport">
                <label for="sport">sport</label> <ion-icon name="basketball-outline">
                <br>
                <input type="checkbox" id="lecture" name="lecture">
                <label for="lecture">lecture</label><ion-icon name="library-outline"></ion-icon>
            </div>

            <div>

                <input
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" id="submit" name="submit" value="submit">
            </div>
        </form>
    </div>



    </div>



    <footer class="w-full bg-white px-10 pt-6 pb-8 static bottom-0 ">
        <a href="index.php">Accueil</a><br>
        <a href="index.php">Inscription</a><br>
        <a href="index.php">Connexion</a><br>
        <a href="index.php">Rechercher</a>
    </footer>

</body>

</html>
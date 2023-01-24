<form action="" method="post">
                <label for="login">Login :</label><br>
                <input type="text"  name="login" placeholder="Entrer le nom d'utilisateur" size="30" required>  <br>
                <br>
                <label for="nom">Nom :</label><br>
                <input type="text"  name="nom" placeholder="Entrer votre nom" size="30" required> <br>
                <br>
                <label for="prenom">Prenom :</label><br>
                <input type="text"  name="prenom" placeholder="Entrer votre prenom" size="30" required><br>  
                <br>
                <label for="password1">Mot de passe :</label><br>
                <input type="password" id="password1" name="password1" placeholder="Mot de passe" size="30" required> <br> 
                <br>
                <label for="password2">Répéter votre Mot de passe :</label><br>
                <input type="password" id="password2" name="password2" placeholder="Mot de passe" size="30" required>  <br>
                <br>
                <input type="checkbox" onclick="affichPass()">Afficher le mot de passe <br>
                <br>
                <input type="submit" name="submit" value="s'inscrire"><br>
                <br>
                <?php 
                    if (isset($message)){
                        echo $message;  //affiche un message d'erreur si probleme
                    }
                    
                ?>
</form>
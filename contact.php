<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bowser_shop;charset=utf8', 'root', '');

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" 
        content="Bienvenue sur notre boutique RETROGAME! 
        Une boutique centrée sur le JEU VIDEO RETRO. 
        Venez donc découvrir nos supers consoles retro ainsi que leurs jeux ! Nous avons une grande variété de produit">
        <meta name="author" content="LOUBEAU Alexandre">
        <meta name="keyword" content="Video-game, Jeux-video, Retrogaming, Jeux anciens, Retrogame, Bowser_shop, Chartres, Boutique">
        
        <!-- LIGE 15 ET 16 A ENLEVER AVANT DE COMMENCER PHP -->
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <!-- LIGNE 15 ET 16 A ENLEVER AVANT DE COMMENCER PHP -->

        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" type="image/x-icon" href="/assets/logo_macaron.png">
        <title>Contact - Retrogame</title>
    </head>
    <body class="index admin account">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main class="form">
            <h1>informations personnelles</h1>
            <form class="form-user" action="contact-traitement.php" method="post">
                <div class="border-right">
                    <div>
                        <label for="pseudo">pseudonyme</label><br>
                        <input type="text" id="pseudo" name="pseudo" value=""><hr class="form-hr">
                    </div>
                    <div>
                        <label for="email">adresse email</label><br>
                        <input type="mail" id="email" name="email" value=""><hr class="form-hr">
                    </div>
                </div>
                <div class="margin-left">
                    <label for="message">Message</label><br>
                    <textarea class="borders" type="text" cols="40" row="5" name="message" id="message" value="" placeholder="Tapez votre message ici" required="required"></textarea>
                </div>
                <button class="submit-user" type="submit">Envoyer</button>
            </form>
            <a class="return margin-top" href="comments.php">Voir les derniers commentaires</a>
        </main>
        <footer class="desktop">
                <?php
                    include './php/footer-desktop.php';
                ?>
        </footer>
        <footer class="mobile">
                <?php
                    include './php/footer-mobile.php';
                    ?>
        </footer>
    </body>
</html>
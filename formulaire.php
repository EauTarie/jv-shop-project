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
        <title>Formulaire - Retrogame</title>
    </head>
    <body class="index admin account">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main class="form">
            <h1>informations personnelles</h1>
            <form class="form-user" action="/formulaire.php" method="post">
                <div class="border-right">
                    <div>
                        <label for="fname">nom</label><br>
                        <input type="text" id="fname" value=""><hr class="form-hr">
                    </div>
                    <div>
                        <label for="lname">prenom</label><br>
                        <input type="text" id="lname" value=""><hr class="form-hr">
                    </div>
                    <div>
                        <label for="email">adresse email</label><br>
                        <input type="email" id="email" value="">
                    </div>
                </div>
                <div class="margin-left">
                    <div>
                        <label for="adress-postal">adresse postale</label><br>
                        <input type="text" id="adress-postal" value=""><hr class="form-hr">
                    </div>
                    <div>
                        <label for="departement">département</label><br>
                        <input type="number" id="departement" value=""><hr class="form-hr">
                    </div>
                    <div>
                        <label for="country">pays</label><br>
                        <input type="text" id="country"value="">
                    </div>
                </div>
                <button class="submit-user" type="submit">Envoyer</button>
            </form>
            <h1>moyens de paiement</h1>
            <button class="add-button" type="add-paiment">ajouter un moyen de paiement</button>
            <img class="icons credit-card" src="/assets/credit-card.svg" alt="logo carte">
            <!-- METTRE LA BALISE PHP POUR LE BACK (TABLE) -->

            <h1>adresse de livraison</h1>
            <button class="add-button" type="add-adress">ajouter une adresse de livraison</button>
            <div class="adress-wrapper">
                <img class="truck" src="/assets/truck.svg" alt="camion">
                <p>adresse de livraison</p>
                <?php

                ?>
            </div>
            <hr class="form-hr">
            <div class="adress-wrapper">
                <img class="truck" src="/assets/truck.svg" alt="camion">
                <p>adresse de livraison</p>
                <?php

                ?>
            </div>
        </main>
        <footer class="desktop">
                <?php
                    include './php/footer-desktop.php';
                ?>
        </footer>
        <footer class="mobile">
                <?php
                    include './php/footer-mobile.php'
                    ?>
        </footer>
    </body>
</html>
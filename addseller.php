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
        <title>Ajout Vendeur - RETROGAME</title>
    </head>
    <body class="index admin">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main class="form">
            <h1>Information du vendeur</h1>
            <form class="form-user" action="admin-seller.php" method="post">
                <div class="border-right">
                    <div>
                        <label for="fname">nom</label><br>
                        <input type="text" name="fname" id="fname" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="lname">prenom</label><br>
                        <input type="text" name="lname" id="lname" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="email">adresse email</label><br>
                        <input type="email" name="email" id="email" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="password">mot de passe</label><br>
                        <input type="password" name="password" id="password" value="" required="required">
                    </div>
                </div>
                <div class="margin-left">
                    <div>
                        <label for="phone">numéro de téléphone</label><br>
                        <input type="tel" name="phone" id="phone" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="departement">département</label><br>
                        <input type="text" name="departement" id="departement" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="adressPostal">adresse postale</label><br>
                        <input type="text" name="adressPostal" id="adressPostal" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="country">pays</label><br>
                        <input type="text" name="country" id="country" value="" required="required">
                    </div>
                </div>
                <button class="submit-user" type="submit">Envoyer</button>
            </form>
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
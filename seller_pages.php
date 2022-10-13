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
        <title>Vendeur - Retrogame</title>
    </head>

    <body>
    <body class="index admin account">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>
        <main class="form">
            <h1>
                Ajouter un produit
            </h1>
            <form class="form-user" action="addproduct.php" method="post">
                <div class="border-right">
                    <label for="product_name">titre</label><br>
                    <input type="text" name="product_name" id="product_name" value="" required="required"><hr class="form-hr">
                    <label for="product_price">Prix</label><br>
                    <input type="number" name="product_price" id="product_price" value="" required="required" placeholder="€">
                </div>
                <div class="margin-left">
                    <label for="product_description">description</label><br>
                    <textarea class="borders" type="text" cols="40" row="5" name="product_description" id="product_description" value="" placeholder="Tapez une description courte de votre produit ici"></textarea>
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
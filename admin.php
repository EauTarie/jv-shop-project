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
        <title>JV SHOP - Admin</title>
    </head>
    <body class="index admin">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>
        <main>
            <h1 class="admin-title">menu administrateur</h1>
            <section class="grid">
                <div class="wrapper">
                    <a href="#">gerer la boutique</a>
                </div>
                <div class="wrapper">
                    <a href="addseller.php">ajouter des sellers</a>
                </div>
                <div class="wrapper">
                    <a href="#">gerer les utilisateurs</a>
                </div>
                <div class="wrapper">
                    <a href="#">gerer les moyens de paiements</a>
                </div>
                <div class="wrapper">
                    <a href="#">ajouter ou retirer des privileges</a>
                </div>
                <div class="wrapper">
                    <a href="#">gerer les paramètres système</a>
                </div>
            </section>
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
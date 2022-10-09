<?php
require '_header.php';
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
        <title>Panier - RETROGAME</title>
    </head>
    <body class="index admin account product">
        <header>
            <?php 
                require './php/header.php';
                var_dump($_SESSION);
            ?>
        </header>
        <main>
            <div class="wrapper">
                <?php 
                $ids = array_keys($_SESSION['panier']);
                unset($_SESSION['panier'][2]);
                $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
                foreach($products as $product):
                ?>
                <?php endforeach ?>
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
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
        <title>Panier d'Achat - Retrogame</title>
    </head>
    <body class="index admin account product shopping">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main class="form">
            <?php $products = $DB->query('SELECT * FROM products'); ?>
            <?php foreach ($products as $product): ?>
                <article class="product">
                    <div class="info">
                        <h1 class="border-bottom"><?php echo $product->title; ?></h1>
                    </div>
                    <a href="description.php?id=<?php echo $product->id; ?>">
                        <img src="/panier/<?php echo $product->id; ?>.jpg" alt="Miniature du produit">
                    </a>
                    <a href="description.php?id=<?php echo $product->id; ?>" class="product-price"><?php echo number_format($product->price,2,","," ").' €'; ?></a>
                    <div class="panier">
                        <a class="btn-addpanier" href="addpanier.php?id=<?php echo $product->id; ?>">
                            <img class="img-addpanier" src="/assets/panier.png" alt="Bouton Ajouter <?php echo $product->title ?> au panier">
                        </a>
                    </div>
    
                </article>

            <?php endforeach ?>
            
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
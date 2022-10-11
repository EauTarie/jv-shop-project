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
        <title>Achat - RETROGAME</title>
    </head>
    <body class="index admin account product">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main>
            <div class="wrapper">
                <section class="description">
                <?php $products = $DB->query('SELECT * FROM products WHERE id=:id', array('id' => $_GET['id'])); ?>
                <?php foreach ($products as $product): ?>
                <div class="thumbnail">
                    <img src="/panier/<?php echo $product->id; ?>.jpg" alt="Miniature de <?php echo $product->name ?>">
                <div class="description-info">
                    <div class="description-info-title">
                        <h1>
                            <?php echo $product->name ?>
                        </h1>
                    </div>
                    <div class="description-price">
                        <h1>
                            <?php echo $product->price ?>
                        </h1>
                    </div>
                    <div class="descripion-add-shopping-cart">
                        <a href="addpanier.php?id=<?php echo $product->id; ?>">ajouter au panier</a>
                    </div>
                </div>
                </section>
                <section class="comments">
                        
                </section>
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
        </footer>
    </body>
</html>
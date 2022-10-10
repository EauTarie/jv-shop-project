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
            ?>
        </header>
        <main>
            <div class="wrapper">
                <?php
                $ids = array_keys($_SESSION['panier']);
                if(empty($ids)) {
                    $products = array();
                } else {
                    $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
                }
                foreach($products as $product):
                ?>
                <article class="product">
                    <a href="#" class="img">
                        <img src="/panier/<?php echo $product->id; ?>.jpg">
                    </a>
                    <div class="info">
                        <span class="name">
                            <?php echo $product->name; ?>
                        </span><br>
                        <span class="price">
                            Prix HTT : <?php echo number_format($product->price,2,","," ").' €'; ?>
                        </span><br>
                        <span class="quantity">
                            Quantité : <?php echo $_SESSION['panier'][$product->id]; ?>
                        </span><br>
                        <span class="subtotal">
                            Prix TTC : <?php echo number_format($product->price * 1.20,2,","," ").' €'; ?>
                        </span><br>
                        <span class="action">
                            <a href="panier.php?delPanier=<?php echo $product->id; ?>" class="del">
                                <img src="/assets/Delete.png" class="icon" alt="Bouton Supprimer">
                            </a>
                        </span><br>
                    </div>
                </article>
                <?php endforeach ?>
                <div class="rowtotal">
                    <p>Prix total : 
                        <span class="total">
                            <?php echo number_format($panier->total(),2,',',' '); ?>€
                        </span>
                    </p>
                </div>
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
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
        <meta name="keyword" content="HTML, CSS, JavaScript">
        
        <!-- LIGE 15 ET 16 A ENLEVER AVANT DE COMMENCER PHP -->
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <!-- LIGNE 15 ET 16 A ENLEVER AVANT DE COMMENCER PHP -->

        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" type="image/x-icon" href="/assets/logo_macaron.png">
        <title>JV SHOP - admin</title>
    </head>
    <body class="index admin account">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>
        <main>
            <h1>menu utilisateur</h1>
            <div class="account-wrapper">
                <aside>
                    <div>
                    <a href="#">détails des commandes</a>
                    </div>
                    <div>
                        <a href="#">gestion du panier</a>
                    </div>
                    <div>
                        <a href="#">gestion des moyens de paiements</a>
                    </div>
                    <div>
                        <a href="#">gestion du compte utilisateur</a>
                    </div>
                    <div>
                        <a href="#">besoin d'aide ?</a>
                    </div>
                    <div>
                        <a class="red-background" href="#">suppression du compte</a>
                    </div>
                </aside>
                <section>
                    <h1>vos dernières commandes</h1>
                    <div class="account-grid">
                    
                    </div>
                </section>
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
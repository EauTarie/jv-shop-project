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
        <title>Connexion VENDEUR - Retrogame</title>
    </head>
    <body class="index admin log-in">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>
        <main class="log-in">
            <?php
                if(isset($_GET['login_err']))
                {
                    $err=htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                            <?php
                            break;

                            case 'email':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email incorrect
                                </div>
                                <?php
                                break;

                            case 'already':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte non existant
                                </div>
                                <?php
                                break;
                    }
                }
            ?>
            <div>
                <form class="form" action="connexion-seller.php" method="post">
                    <h2>Connexion VENDEUR</h2>
                    <input type="email" name="email" placeholder="Email" required="required" autocomplete="off">
                    <input type="password" name="password" placeholder="Mot de Passe" required="required" autocomplete="off">
                    <button type="submit" class="btn">Connexion</button>
                </form>
                <p class="btn btn-reverse-color"><a href="inscription.php">Inscription</a></p><hr class="form-hr">
                <a class="return margin-top" href="log-in.php">connexion en temps que client</a><hr class="form-hr">
                <a class="return margin-top" href="seller_log-in.php">connexion en temps qu'administrateur</a>
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
<?php
    require_once 'config.php';
    if(!isset($_SESSION['user'])) {
        header('Location:log-in.php');
    };
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
        <!-- <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" /> -->
        <!-- LIGNE 15 ET 16 A ENLEVER AVANT DE COMMENCER PHP -->

        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" type="image/x-icon" href="/assets/logo_macaron.png">
        <title>Delete Account - Retrogame</title>
    </head>

    <body class="index admin account">
    <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main class="form">
            <h1>Suppression de compte</h1>
            <form class="form-user" action="delete_account_traitement.php" method="post">
                <div class="border-right">
                    <div>
                        <label for="email">email</label><br>
                        <input type="text" name="email" id="email" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="email-retype">Re-tapez votre adresse email</label><br>
                        <input type="text" name="email-retype" id="email-retype" value="" required="required"><hr class="form-hr">
                    </div>
                </div>
                <div class="margin-left">
                    <div>
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" value="" required="required"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="password-retype">Re-taper votre mot de passe</label><br>
                        <input type="password" name="password-retype" id="password-retype" value="" required="required"><hr class="form-hr">
                    </div>
                </div>
                <div>
                    <label for="delete-confirm">Confirmez-vous la suppression de votre compte ?<br>
                    <span class="warning"> 
                        <span class="color-red">
                            Atttention !
                        </span> 
                        Cette action est irreversible.
                    </span>
                    </label>
                    <input type="checkbox" name="delete-confirm" id="delete-confirm" required="required">
                </div>
                <button class="return bigger" type="submit">Supprimer le compte</button>
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
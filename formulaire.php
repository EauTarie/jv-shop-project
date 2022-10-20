<?php
    require_once 'config.php';
    if(!isset($_SESSION['user'])) {
        header('Location:log-in.php');
    }
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
        <title>Formulaire - Retrogame</title>
    </head>
    <body class="index admin account">
        <header>
            <?php
                include './php/header.php';
            ?>
        </header>

        <main class="form">
            <?php
                $check = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
                $check -> execute(array($_SESSION['email']));
                $data = $check->fetch();
            ?>
            <h1>informations personnelles</h1>
            <form class="form-user" action="formulaire_traitement.php" method="post">
                <div class="border-right">
                    <div>
                        <label for="pseudo">pseudo</label><br>
                        <input type="text" name="pseudo" id="pseudo" value="<?php echo $data['pseudo']; ?>"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="email">adresse email</label><br>
                        <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="phone">téléphone</label><br>
                        <input type="tel" name="phone" id="phone" value="<?php echo $data['phone']; ?>"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="lname">nom</label><br>
                        <input type="text" name="lname" id="lname" value="<?php echo $data['lname']; ?>">
                    </div>
                </div>
                <div class="margin-left">
                    <div>
                        <label for="fname">prenom</label><br>
                        <input type="text" name="fname" id="fname" value="<?php echo $data['fname']; ?>"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="adress">adresse postale</label><br>
                        <input type="text" name="adress" id="adress" value="<?php echo $data['adress']; ?>"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="departement">département</label><br>
                        <input type="number" name="departement" id="departement" value="<?php echo $data['departement']; ?>"><hr class="form-hr">
                    </div>
                    <div>
                        <label for="country">pays</label><br>
                        <input type="text" name="country" id="country" value="<?php echo $data['country']; ?>">
                    </div>
                </div>
                <button class="submit-user" type="submit">Envoyer</button>
            </form>
            <h1>moyens de paiement</h1>
            <a href="#" class="add-button" type="add-paiment">ajouter un moyen de paiement</a>
            <img class="icons credit-card" src="/assets/credit-card.svg" alt="logo carte">
            <!-- METTRE LA BALISE PHP POUR LE BACK (TABLE) -->

            <h1>adresse de livraison</h1>
            <div class="adress-wrapper">
                <div class="delivery">
                    <img class="truck" src="/assets/truck.svg" alt="camion">
                    <p>adresse de livraison</p>
                </div>
                <?php
                        echo "<p class=\"contact-information\">" . $data['adress']. " " . $data['departement']. " " . $data['country']. "</p>";
                        ?>
            </div>
            <a href="#" class="add-button" type="add-adress">ajouter une adresse de livraison</a>
            <hr class="form-hr">
            <a class="return bigger" href="delete-account.php">Supprimer le compte</a>
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
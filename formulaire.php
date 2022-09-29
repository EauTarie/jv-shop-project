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
            <h1>informations personnelles</h1>
            <form class="form-user" action="/formulaire.php" method="post">
                <div>
                    <div>
                        <label for="fname">nom</label>
                        <input type="text" id="fname" value="">
                    </div>
                    <div>
                        <label for="lname">prenom</label>
                        <input type="text" id="lname" value="">
                    </div>
                    <div>
                        <label for="email">adresse email</label>
                        <input type="email" id="email" value="">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="adress-postal">adresse postale</label>
                        <input type="text" id="adress-postal" value="">
                    </div>
                    <div>
                        <label for="departement">département</label>
                        <input type="number" id="departement" value="">
                    </div>
                    <div>
                        <label for="country">pays</label>
                        <input type="text" id="country"value="">
                    </div>
                </div>
                <button class="submit-user" type="submit">Envoyer</button>
            </form>
            <h1>moyens de paiement</h1>
            <button type="add-paiment">ajouter un moyen de paiement</button>
            <img src="/assets/credit-card.svg" alt="logo carte">
        </main>
        <footer>
                <?php
                    include './php/footer.php';
                ?>
        </footer>
    </body>
</html>
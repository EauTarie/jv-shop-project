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
        
        <!-- A ENLEVER AVANT DE COMMENCER PHP -->
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <!-- A ENLEVER AVANT DE COMMENCER PHP -->

        <meta name="keyword" content="HTML, CSS, JavaScript">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" type="image/x-icon" href="/assets/logo_macaron.png">
        <title>Home - Retrogame</title>
    </head>
    <body class="index">
        <header>
        <?php 
            include './php/header.php';
        ?>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="#">jeux populaires &#8595;</a>
                </li>
                <li>
                    <a href="#">nes &#47; super nes &#8595;</a>
                </li>
                <li>
                    <a href="#">medagrive &#8595;</a>
                </li>
                <li>
                    <a href="#">ps1 &#47; ps2 &#8595;</a>
                </li>
                <li>
                    <a href="#">xbox &#8595;</a>
                </li>
                <li>
                    <a href="#">autres &#8595;</a>
                </li>
            </ul>
        </nav>
        <main>
            <section>
                <h1>liste des consoles</h1>
                <div class="big-wrapper">
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/megadrive.jpg" alt="Megadrive"></a>
                        </div>
                        <div class="title">
                            <a class="white-background" href="#">megadrive</a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/snes.jpg" alt="Super Nes"></a>
                        </div>
                        <div class="title">
                            <a class="white-background" href="#">super nes</a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/ps2.jpg" alt="PS2"></a>
                        </div>
                        <div class="title">
                            <a class="white-background" href="#">PS2</a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/gamecube-japonaise-orange.jpg" alt="gamecube"></a>
                        </div>
                        <div class="title">
                            <a class="white-background" href="#">gamecube</a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/dreamcast-black-limited-ed-sans-boite.jpg" alt="dreamcast"></a>
                        </div>
                        <div class="title">
                            <a class="white-background" href="#">dreamcast</a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/nintendo64.jpg" alt="Nintendo 64"></a>
                        </div>
                        <div class="title">
                            <a class="white-background" href="#">nintendo 64</a>
                        </div>
                    </article>
                </div>
            </section>
            <aside>
                <a href="shopping-cart.php"><h1>derniers jeux sortis</h1></a>
                <article>
                    <div class="thumbnail-small">
                        <a class="none" href="#">
                            <img src="./assets/cartouche-gba.jpg" alt="cartouche-gba">
                        </a>
                    </div>
                    <div>
                            <a class="underline" href="#">
                                zelda ocarina of time
                            </a>
                        <hr>
                        <a class="no-border underline" href="#">
                            à partir de :
                            <?php
                            ?>
                            </a>
                    </div>
                </article>                <article>
                    <div class="thumbnail-small">
                        <a class="none" href="#">
                            <img src="./assets/cartouche-gba.jpg" alt="cartouche-gba">
                        </a>
                    </div>
                    <div>
                            <a class="underline" href="#">
                                zelda ocarina of time
                            </a>
                        <hr>
                        <a class="no-border underline" href="#">
                            à partir de :
                            <?php
                            ?>
                            </a>
                    </div>
                </article>                <article>
                    <div class="thumbnail-small">
                        <a class="none" href="#">
                            <img src="./assets/cartouche-gba.jpg" alt="cartouche-gba">
                        </a>
                    </div>
                    <div>
                            <a class="underline" href="#">
                                zelda ocarina of time
                            </a>
                        <hr>
                        <a class="no-border underline" href="#">
                            à partir de :
                            <?php
                            ?>
                            </a>
                    </div>
                </article>
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
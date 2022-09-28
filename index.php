<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>JV-SHOP</title>
    </head>
    <body class="index">
        <header>
        <?php 
            include './php/header.php';
        ?>
        </header>
        <nav>
            <ul>
                <li><a href="#">jeux populaires</a></li>
                <li><a href="#">nes &#47; super nes</a></li>
                <li><a href="#">medagrive</a></li>
                <li><a href="#">ps1 &#47; ps2</a></li>
                <li><a href="#">xbox</a></li>
                <li><a href="#">autres</a></li>
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
                            <a href="#"><h2>megadrive</h2></a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/snes.jpg" alt="Super Nes"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h2>super nes</h2></a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/ps2.jpg" alt="PS2"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h2>PS2</h2></a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/gamecube-japonaise-orange.jpg" alt="gamecube"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h2>gamecube</h2></a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/dreamcast-black-limited-ed-sans-boite.jpg" alt="dreamcast"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h2>dreamcast</h2></a>
                        </div>
                    </article>
                    <article>
                        <div class="thumbnail">
                            <a href="#"><img src="./assets/nintendo64.jpg" alt="Nintendo 64"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h2>nintendo 64</h2></a>
                        </div>
                    </article>
                </div>
            </section>
            <aside>
                <h1>derniers jeux sortis</h1>
                <article>
                    <div class="thumbnail">
                        <img src="./assets/cartouche-gba.jpg" alt="cartouche-gba">
                    </div>
                    <div>
                        <h1>
                            <a href="#">
                                zelda ocarina of time
                            </a>
                        </h1>
                        <hr>
                        <p class="price"><a href="#">
                            à partir de :
                            <?php
                            ?>
                        </a></p>
                    </div>
                </article>
                <article>
                    <div class="thumbnail">
                        <img src="./assets/cartouche-gba.jpg" alt="cartouche-gba">
                    </div>
                    <div>
                        <h1>
                            <a href="#">
                                zelda ocarina of time
                            </a>
                        </h1>
                        <hr>
                        <p class="price"><a href="#">
                            à partir de :
                            <?php
                            ?>
                        </a></p>
                    </div>
                </article>
                <article>
                    <div class="thumbnail">
                        <img src="./assets/cartouche-gba.jpg" alt="cartouche-gba">
                    </div>
                    <div>
                        <h1>
                            <a href="#">
                                zelda ocarina of time
                            </a>
                        </h1>
                        <hr>
                        <p class="price"><a href="#">
                            à partir de :
                            <?php
                            ?>
                        </a></p>
                    </div>
                </article>
        </main>
        <footer>
            <?php
                include './php/footer.php';
            ?>
        </footer>
    </body>
</html>
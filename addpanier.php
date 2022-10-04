<?php
require 'panier.class.php';
    $bdd = new PDO('mysql:host=localhost;dbname=bowser_shop;charset=utf8', 'root', '');
    $panier = new panier();
    if(isset($_GET['id'])) {
        $product= $bdd->prepare('SELECT id FROM products WHERE id=:id');
        $product->execute(array('id' => $_GET['id']));
        var_dump($product);
    } else {
        die('Vous n\'avez pas selectionné de produit à ajouter au panier');
    }
?>
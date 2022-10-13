<?php
require_once 'config.php';

if(!empty($_POST['product_name']) && !empty($_POST['product_price'])) {
    $productName=htmlspecialchars($_POST['product_name']);
    $productPrice=htmlspecialchars($_POST['product_price']);
    $productInfo=htmlspecialchars($_POST['product_description']);
    
    $insert = $bdd->prepare('INSERT INTO products (title, price, comments) VALUES(:title, :price, :comments)');
    $insert->execute(array(
        'title' => $productName,
        'price' => $productPrice,
        'comments' => $productInfo
    ));
    die('Le produit a bien été ajouté. <a href="javascript:history.back()"> Retourner sur le formulaire</a>.');
} else {
    header('Location: addseller.php?reg_err=product_field_required');
}
<?php
require_once 'config.php';

if(!empty($_POST['product_name']) && !empty($_POST['product_price']) && !empty($_POST['product_seller_email'])) {
    $productName=htmlspecialchars($_POST['product_name']);
    $productPrice=htmlspecialchars($_POST['product_price']);
    $productSellerEmail=htmlspecialchars($_POST['product_seller_email']);
    $productInfo=htmlspecialchars($_POST['product_description']);
    if(empty($productInfo)) {
        $check = $bdd->prepare('SELECT email FROM ') // A FINIR TOUT A L'HEURE
    }
} else {
    header('Location: addseller.php?reg_err=product_field_required');
}
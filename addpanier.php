<?php
require '_header.php';
if(isset($_GET['id'])){
    $product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
    if(empty($product)) {
        die('Ce produit n\'existe pas');
    } else {
    $panier->add($product[0]->id);
    die('Le produit a bien été ajouté à votre panier. <a href="javascript:history.back()"> Retourner sur le catalogue</a>');};
} else {
    die('Vous n\'avez pas sélectionné de produit dans votre panier');
}
?>
<?php
require_once 'config.php';

if(!empty($_POST['message'])) {
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    if(empty($_POST['pseudo'] )) {
        $pseudo='utilisateur Anonyme';
        $insert= $bdd->prepare('INSERT INTO comments(pseudo, mail, comments) VALUES(:pseudo, :email, :comments)');
        $insert->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'comments' => $message
        ));
        header('Location: contact.php?=success888');
        echo $pseudo ." " . $email . " " . $message;
    } else {
        $insert = $bdd->prepare('INSERT INTO comments(pseudo, mail, comments) VALUES(:pseudo, :mail, :comment)');
        $insert->execute(array(
            'pseudo'=> $pseudo,
            'mail'=> $email,
            'comment'=> $message
        ));
        die('Le produit a bien été ajouté. <a href="javascript:history.back()"> Retourner sur le formulaire</a>.');
    }
} else {
    header('Location: contact.php?reg_err=empty_messages');
    echo $pseudo ." " . $email . " " . $message;
}
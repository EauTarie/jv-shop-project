<?php
require_once 'config.php';

if(!empty($_POST['nickname'] && !empty($_POST['email']) && !empty($_POST['message']))) { // A VOIR LA CONDITION REQUISE POUR LE MESSAGE (Utilisateur Anonyme ou compte reconnu)
    $nickname=htmlspecialchars($_POST['nickname']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    $anonyme='Anonyme';


    $check = $bdd->prepare('SELECT pseudo, email, FROM messages WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    $email=strtolower($email);

    if($row > 0) {
        $insert=$bdd->prepare('INSERT INTO messages (pseudo, email, messages) VALUES(:pseudo, :email, :messages');
        $insert->execute(array(
            'pseudo' => $nickname,
            'email' => $email,
            'messages' => $message
        ));
        header('Location: contact.php?reg_err=success');
    } else {
        header('Location: contact.php?reg_err=unknown');
    }
} else 
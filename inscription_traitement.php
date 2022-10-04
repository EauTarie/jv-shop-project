<?php
require_once 'config.php';

if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);
    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    $email=strtolower($email);

    if($row ==0)
    {
        if(strlen($pseudo) <= 100)
        {
            if(strlen($email) <= 100)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    if($password === $password_retype)
                    {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password) VALUES(:pseudo,:email,:password)');
                        $insert->execute(array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password   
                        ));
                        header('Location: inscription.php?reg_err=success');
                    } else {header('Location: inscription.php?reg_err=password');die();}
                } else {header('Location: inscription.php?reg_err=email');die();}
            } else {header('Location: inscription.php?reg_err=email.length');die();}
        } else {header('Location: inscription.php?reg_err=pseudo_length');die();}
    } else {header('Location: inscription.php?reg_erro=already');die();}
}
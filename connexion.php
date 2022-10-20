<?php
require_once 'config.php';


if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    $email = strtolower($email);
    $check=$bdd->prepare('SELECT id, pseudo, email, pass FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row > 0)
    {
        if((filter_var($email, FILTER_VALIDATE_EMAIL)))
        {
            $password =hash('sha256', $password);

            if($data['pass'] === $password)
            {
                $_SESSION['user'] = $data['pseudo'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['id'] = $data['id'];
                header('Location: landing.php');
            } else header('Location: log-in.php?login_err=password');
        } else header('Location: log-in.php?login_err=email');
    } else header('Location: log-in.php?login_err=already');
} else header('Location: log-in.php');
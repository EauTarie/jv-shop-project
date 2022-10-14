<?php
session_start();
require_once 'config.php';

echo $_POST['email']. $_POST['password'];
if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    $email = strtolower($email);
    $check=$bdd->prepare('SELECT pseudo, mail, pass FROM moderators WHERE mail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row > 0)
    {
        if((filter_var($email, FILTER_VALIDATE_EMAIL)))
        {

            if($data['pass'] == $password)
            {
                $_SESSION['user'] = $data['pseudo'];
                header('Location: landingadmin.php');
            } else header('Location: admin_log-in.php?login_err=password');
        } else header('Location: admin_log-in.php?login_err=email');
    } else header('Location: admin_log-in.php?login_err=already');
} else header('Location: admin_log-in.php');
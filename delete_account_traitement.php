<?php
        require 'config.php';
    if(!empty($_POST['email']) && !empty($_POST['email-retype']) 
        && !empty($_POST['password']) && !empty($_POST['password-retype']) && isset($_POST['delete-confirm']))
        {
            var_dump($_SESSION);
            $email=htmlspecialchars($_POST['email']);
            $emailConfirm=htmlspecialchars($_POST['email-retype']);
            $pass=htmlspecialchars($_POST['password']);
            $passConfirm=htmlspecialchars($_POST['password-retype']);
            $id=$_SESSION['id'];
            $check = $bdd->prepare('SELECT id, email, pass FROM utilisateurs WHERE email = ?');
            $check -> execute(array($email));
            $data = $check->fetch();


            if($email === $emailConfirm && $pass === $passConfirm)
            {
                $pass=hash('sha256', $pass);
                if($email === $data['email'] && $pass === $data['pass'])
                {
                    $update = $bdd -> prepare(
                        "DELETE FROM utilisateurs
                        WHERE id = :id
                    ");
                    $update -> execute(array(
                        'id' => $id
                    ));
                    header('Location: index.php?reg_err=account_suppressed');
                } else {
                    header('Location: delete-account.php?reg_err=unknown');
                }
            } else {
                header('Location: delete-account.php?reg_err=match');
            }
        } else {
            header('Location: delete-account.php?reg_err=empty');
        }
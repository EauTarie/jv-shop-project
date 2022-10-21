<?php
    require_once 'config.php';

    if(!empty($_POST['email']) && !empty($_POST['pseudo']))
        {
            $pseudo=htmlspecialchars($_POST['pseudo']);
            $email=htmlspecialchars($_POST['email']);
            $phone=htmlspecialchars($_POST['phone']);
            $lname=htmlspecialchars($_POST['lname']);
            $fname=htmlspecialchars($_POST['fname']);
            $adress=htmlspecialchars($_POST['adress']);
            $departement=htmlspecialchars($_POST['departement']);
            $country=htmlspecialchars($_POST['country']);
            $id=$_SESSION['id'];

            $update = $bdd -> prepare(
                "UPDATE utilisateurs
                SET 
                    lname = :lname, 
                    fname = :fname, 
                    phone = :phone,
                    adress = :adress,
                    departement = :departement,
                    country = :country,
                    pseudo = :pseudo,
                    email = :email
                WHERE id = :id
                ");
                $update -> execute(array(
                    'lname' => $lname, 
                    'fname' => $fname, 
                    'phone' => $phone,
                    'adress' => $adress,
                    'departement' => $departement,
                    'country' => $country,
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'id' => $id
                ));
            header('Location: formulaire.php?reg_err=success');
        } else {
            header('Location: formulaire.php?reg_err=empty');
        }
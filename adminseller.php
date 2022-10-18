<?php
require_once 'config.php';

if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['departement']) && !empty($_POST['adressPostal']) && !empty($_POST['country'])) {
    $fName=htmlspecialchars($_POST['fname']);
    $lName=htmlspecialchars($_POST['lname']);
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);
    $phone=htmlspecialchars($_POST['phone']);
    $departement=htmlspecialchars($_POST['departement']);
    $adressPostal=htmlspecialchars($_POST['adressPostal']);
    $country=htmlspecialchars($_POST['country']);

    $check = $bdd->prepare('SELECT first_name, last_name, email, pass FROM vendeurs WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    $email=strtolower($email);


    if($row == 0)
    {
        if(strlen($fName) <=255)
        {
            if(strlen($lName) <=255)
            {
                if(strlen($email) <=255)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $insert = $bdd->prepare(
                            'INSERT INTO vendeurs (first_name, last_name, pass, tel_number, email, departement, adress_postal, country)
                             VALUES (:fname, :lname, :pass, :phone, :email, :departement, :adresspostal, :country)');
                        $insert->execute(array(
                            'fname' => $fName,
                            'lname' => $lName,
                            'pass' => $password,
                            'phone' => $phone,
                            'email' => $email,
                            'departement' => $departement,
                            'adresspostal' => $adressPostal,
                            'country' => $country
                        ));
                        die('Le vendeur a bien été ajouté. <a href="javascript:history.back()"> Retourner sur le formulaire</a>.');
                    } else {header('Location: addseller.php?reg_err=email');die();}
                } else { header('Location: addseller.php?reg_err=email_length');die(); }
            } else { header('Location: addseller.php?reg_err=lName_length');die(); }
        } else { header('Location: addseller.php?reg_err=fName_length');die(); }
    } else { header('Location: addseller.php?reg_erro=already');die(); }
 } else {
    header('Location: addseller.php?reg_err=field_required');
 }
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

    $check = $bdd->prepare('SELECT first_name, last_name, email, password FROM vendeurs WHERE email = ?');
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
                        // Non insertion des données sur PHP my ADMIN, regarder plus tard //
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $insert = $bdd->prepare('INSERT INTO vendeurs (first_name, last_name, password, tel_number, email, departement, adress-postal, country)
                        VALUES (:fname, :lname, :password, :phone, :email, :departement, :adress-postal, :country)');
                        $insert->execute(array(
                            'fname' => $fName,
                            'lname' => $lName,
                            'password' => $password,
                            'phone' => $phone,
                            'email' => $email,
                            'departement' => $departement,
                            'adress-postal' => $adressPostal,
                            'country' => $country
                        ));
                    } else {header('Location: inscription.php?reg_err=email');die();}
                } else { header('Location: inscription.php?reg_err=email_length');die(); }
            } else { header('Location: inscription.php?reg_err=lName_length');die(); }
        } else { header('Location: inscription.php?reg_err=fName_length');die(); }
    } else { header('Location: inscription.php?reg_erro=already');die(); }
 } else {
    header('Location: addseller.php?reg_error=truc');
    echo $fName. '<br>'. $lName. '<br>'. $email. '<br>'. $password. '<br>'.$phone. '<br>'.$departement . '<br>' . $adressPostal. '<br>'. $country; //TEST//
 }
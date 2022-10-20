<?php
require_once 'config.php';

if(!empty($_POST['pseudo']) || !empty($_POST['pass']) 
    || !empty($_POST['email']) || !empty($_POST['phone']) 
    || !empty($_POST['lname']) || !empty($_POST['fname']) 
    || !empty($_POST['adress']) || !empty($_POST['departement']) 
    || !empty($_POST['country']))
{
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $pass=htmlspecialchars($_POST['pass']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $lname=htmlspecialchars($_POST['lname']);
    $fname=htmlspecialchars($_POST['fname']);
    $adress=htmlspecialchars($_POST['adress']);
    $departement=htmlspecialchars($_POST['departement']);
    $country=htmlspecialchars($_POST['country']);
} else {
    header('Location: formulaire.php?form_err=empty');
}
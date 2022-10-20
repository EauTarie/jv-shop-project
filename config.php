<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bowser_shop;charset=utf8', 'root', '');
    } catch(Exception $e) 
    {
        die('Erreur'.$e->getMessage());
    }

    session_start();
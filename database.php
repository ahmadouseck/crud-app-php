<?php
$dsn = 'msql:host= localhost;dbname=company';

$username = 'root';
$password = '';

$options = [];


try{

    $connection = new  PDO($dsn,$username,$password,$options);
    echo 'connexion reussie';  
}catch(PDOException $e ){
    echo 'echec de la connexion';

}
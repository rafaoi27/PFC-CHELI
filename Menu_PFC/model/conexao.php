<?php
    function Conexao(){
    
    $banco = 'mysql:dbname=farmacia;host=localhost';
    $username= 'root';
    $password = ''; 

    try {
    $pdo = new PDO($banco,$username,$password);
    
    return $pdo;
    } catch (PDOException $exc) {
        echo $exc->getLine();
    }
}
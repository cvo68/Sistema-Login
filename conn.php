<?php 

    session_start();
    
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $dbname = "loginsis";

    global $pdo;

    try{
        $pdo = new PDO("mysql: dbname=".$dbname."; host=".$localhost, $user, $password);

        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        print "ERRO ". $e-> getMessage();
        exit;
    }
?>
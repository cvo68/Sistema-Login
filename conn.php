<?php 
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $dbname = "loginsis";

    $pdo = new PDO("mysql: dbname=".$dbname."; host=".$localhost, $user, $password);

    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo -> query("SELECT * FROM sistema");

    $sql -> execute();

    print $sql -> rowCount();


?>
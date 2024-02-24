<?php 
    require_once 'conn.php';
    require_once 'logar.php';

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        $usuario = new User();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        $usuario -> logar($email, $senha);

        if($usuario -> logar($email, $senha == true)){
            if(isset($_SESSION['id'])){
                header("Location: read.php");
            }
        }
        else{
            header("Location: index.html");
        }
        }
    else{
        header("Location: index.html");
    }  
?>
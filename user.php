<?php 
    require_once 'conn.php';

  class User{
    public function logar($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM sistema WHERE email = :email AND senha = : senha";

        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("email", $email);
        $sql -> bindValue("senha", $senha);
        $sql -> execute();

        if($sql -> rowCount() > 0){
            $dado = $sql -> fetch();

            print $dado['id'];

            $_SESSION['id'] = $dado['id'];
            return true;
        }
        else{
            return false;
        }
    }
  }  

?>
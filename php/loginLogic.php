<?php

    /*require('database.php');

    $database = connectToDatabase();

    $query = 'SELECT PASSWORD FROM ADHERANT WHERE EMAIL = \'' . $_POST['email'] . '\'';

    $sql = $database->prepare($query);
    $sql->execute();

    $fetch = $sql->fetch(PDO::FETCH_ASSOC);

    if ($fetch["PASSWORD"] == hash("md5", $_POST['password'])) {
        $_SESSION["currentUser"] = $_POST["email"];
        header('Location: ../login.php?message=Connexion réussite');
    } else {
        header('Location: ../login.php?message=Problème de connexion, vérifiez votre email et mot de passe');
    }*/

    include("../admin/config.php");
    if(count($_POST))
    { 
       $email=stripslashes($_POST['email']);
       $password=sha1($_POST['password']);
      $connectReq=$classadherant->Login($email,$password);
        if($connectReq->rowCount()>0)
        {
             $tabses=$connectReq->fetch();  
             $_SESSION['user']['email']=$email;
             $_SESSION['user']['role']=stripslashes($tabses['role']);
             $_SESSION['user']['id']=$tabses['id']; 
             $_SESSION['user']['nom']=stripslashes($tabses['nom']); 
             $_SESSION['user']['prenoms']=stripslashes($tabses['prenoms']);  
             header("location:../admin/index.php");
             exit(); 
        }else{
            $notification="<strong>Erreur!</strong> Login ou Mot de passe incorrect!";  
        }  
    }

?>
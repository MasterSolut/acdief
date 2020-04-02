<?php

    require('database.php');

    $database = connectToDatabase();

    $query = 'SELECT email FROM adherant WHERE email = \'' . $_POST['email'] . '\'';

    $sql = $database->prepare($query);
    $sql->execute();

    $fetch = $sql->fetch(PDO::FETCH_ASSOC);

    if ($fetch["EMAIL"] == $_POST['email']) {
        header('Location: ../register.php?message=Cette adresse email est déjà utilisée');
    } else {

        if($_POST["password"] == $_POST["password-bis"]) {
            $hashedPassword = hash('sha1', $_POST["password"]);

            $query = 'INSERT INTO adherant (nom, prenoms, email, password, role) VALUES (\'' . $_POST['name'] . '\',\'' . $_POST['surname'] . '\',\'' . $_POST['email'] . '\',\'' . $hashedPassword . '\', \'USER\')';
            try {
                $database->exec($query);
                header('Location: ../login.php?message=Votre compte a bien été créé');
            } catch(Exception $e) {
                header('Location: ../register.php?message=Un problème est survenu lors de la création de votre compte, veuillez rééssayer');
            }
        } else {
            header('Location: ../register.php?message=Les mots de passes ne correspondent pas');
        }
    }

?>
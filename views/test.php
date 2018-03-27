<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('../controllers/user.php'); ?>

<?php

 $usr = new User();

 if(isset($_POST['button'])) {
     $try = $usr->createUser(
         array(
             "firstname" => $_POST['firstname'],
             "lastname" =>  $_POST['firstname'],
             "password" => $_POST['pass'],
            "email" => $_POST['email'],
            "fix" => $_POST['fix'],
            "mobile" => $_POST['mobile'],
            "address" => $_POST['address'],
            "type" => $_POST['type'],
            "isadmin" => 0 // l'utilisateur ne doit definir lui meme si il est un admin
        )
    );
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
TEST
        <?php
            // $usr = new User();
            // // $test = $usr->userList();
            //
            // $test = $usr->createUser(array(
            //                 'firstname' => 'anthony',
            //                 'lastname' => 'barei',
            //                 'password' => 'test',
            //                 'email' => 'anthony.barei@outlook.fr',
            //                 'mobile_phone' => '0665245218',
            //                 'type' => 0,
            //                 'isadmin' => 1));

            //die(var_dump($test));
         ?>

<form class="" action="" method="post">
    <p>
        <label for="firstname">prénom</label>
        <input type="text" name="firstname" value="">
    </p>
    <p>
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" value="">
    </p>

    <p>
        <label for="pass">Mt de passe</label>
        <input type="password" name="pass" value="">
    </p>

    <p>
        <label for="email">Email</label>
        <input type="email" name="email" value="">
    </p>

    <p>
        <label for="fix">Téléphone Fix</label>
        <input type="text" name="fix" value="">
    </p>

    <p>
        <label for="mobile">Téléphone Mobile</label>
        <input type="text" name="mobile" value="">
    </p>

    <p>
        <label for="address">Adresse</label>
        <input type="text" name="address" value="">
    </p>

    <p>
        <label for="type">Vous êtes ?</label>
        <input type="radio" name="type" value="0"> Particulier
        <input type="radio" name="type" value="1"> Professionnel
    </p>

    <p>
        <button type="submit" name="button">ok</button>
    </p>

</form>
    </body>
</html>

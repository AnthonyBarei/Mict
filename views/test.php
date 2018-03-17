<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('../controllers/user.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
TEST
        <?php
            $usr = new User();
            // $test = $usr->userList();

            $test = $usr->createUser(array(
                            'firstname' => 'anthony',
                            'lastname' => 'barei',
                            'password' => 'test',
                            'email' => 'anthony.barei@outlook.fr',
                            'mobile_phone' => '0665245218',
                            'type' => 0,
                            'isadmin' => 1));

            die(var_dump($test));
         ?>

    </body>
</html>

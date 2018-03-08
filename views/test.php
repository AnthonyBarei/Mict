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
                            'user_firstname' => 'anthony',
                            'user_lastname' => 'barei',
                            'user_password' => 'test',
                            'user_email' => 'anthony.barei@outlook.fr',
                            'user_mobile_phone' => '0665245218',
                            'user_type' => 0,
                            'user_isadmin' => 1));

            die(var_dump($test));
         ?>

    </body>
</html>

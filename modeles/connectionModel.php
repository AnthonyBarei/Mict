<?php
/**
 *
 */
class DbConnect
{

    public function connect() {
        $host = 'localhost';
        $dbname = 'mict';
        $user = 'root';
        $password = 'root';

        try {
            $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }

        return $dbh;
    }
}


?>

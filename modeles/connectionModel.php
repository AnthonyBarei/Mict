<?php
/**
 *
 */
class DbConnect
{

    public function connect() {
        $host = 'db727863824.db.1and1.com';
        $dbname = 'db727863824';
        $user = 'dbo727863824';
        $password = 'LPDW-mict2018';

        try {
            $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }

        return $dbh;
    }
}


?>

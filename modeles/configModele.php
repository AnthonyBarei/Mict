<?php
require_once('connectionModel.php');
require_once('../functions.php');

class configModel extends DbConnect {

    public function getConfigs() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from config');
        $result = $res->fetchAll();

        return $result;
    }

    public function getConfigbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM config
            WHERE config_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createConfig($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO config (
                config_name,
                config_value)
            VALUES (:name, :value)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updateConfig($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE config
            SET
                config_name = :name,
                config_value = :value
            WHERE config_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deleteConfig($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM config
            WHERE config_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

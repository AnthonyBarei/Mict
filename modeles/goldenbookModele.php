<?php
require_once('connectionModel.php');
require_once('../functions.php');

class goldenbookModel extends DbConnect {

    public function getGoldenbooks() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from goldenbook');
        $result = $res->fetchAll();

        return $result;
    }

    public function getGoldenbookbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM goldenbook
            WHERE goldenbook_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createGoldenbook($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO goldenbook (
                goldenbook_user,
                goldenbook_date,
                goldenbook_commentary)
            VALUES (:user, NOW(), :commentary)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updateGoldenbook($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE goldenbook
            SET
                goldenbook_user = :user,
                goldenbook_date = :date,
                goldenbook_commentary = :commentary
            WHERE goldenbook_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deleteGoldenbook($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM goldenbook
            WHERE goldenbook_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

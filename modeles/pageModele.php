<?php
require_once('connectionModel.php');
require_once('../functions.php');

class pageModel extends DbConnect {

    public function getPages() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from page');
        $result = $res->fetchAll();

        return $result;
    }

    public function getPagebyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM page
            WHERE page_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createPage($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO page (
                page_name,
                page_rows)
            VALUES (:name, :rows)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updatePage($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE page
            SET
                page_name = :name,
                page_rows = :rows
            WHERE page_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deletePage($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM page
            WHERE page_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

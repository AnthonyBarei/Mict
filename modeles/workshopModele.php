<?php
require_once('connectionModel.php');
require_once('../functions.php');

class workshopModel extends DbConnect {

    public function getWorkshops() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from workshop');
        $result = $res->fetchAll();

        return $result;
    }

    public function getWorkshopbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM workshop
            WHERE workshop_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createWorkshop($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO workshop (
                workshop_name,
                workshop_description,
                workshop_price,
                workshop_projects)
            VALUES (:name, :description, :price, :projects)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updateWorkshop($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE workshop
            SET
                workshop_name = :name,
                workshop_description = :description,
                workshop_price = :price,
                workshop_projects = :projects,
            WHERE workshop_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deleteWorkshop($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM workshop
            WHERE workshop_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

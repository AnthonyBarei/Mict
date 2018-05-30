<?php
require_once('connectionModel.php');

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

        //die(var_dump($params));

        if($params["infos"][0] !== "") {
            $params["infos"] = json_encode($params["infos"]);
        } else {
            $params["infos"] = null;
        }

        $res = $dbh->prepare('
            INSERT INTO workshop (
                workshop_name,
                workshop_description,
                workshop_price,
                workshop_projects,
                workshop_infos)
            VALUES (:name, :description, :price, :projects, :infos)
        ');

        try {
            $result = $res->execute($params);
        } catch (PDOException $e) {
            die(var_dump($e));
        }



        return $result;
    }

    public function updateWorkshop($params) {
        $dbh = $this->connect();

        if($params["infos"][0] !== "") {
            $params["infos"] = json_encode($params["infos"], JSON_UNESCAPED_UNICODE);
        } else {
            $params["infos"] = null;
        }

        if($params["description"][0] !== "") {
            $params["description"] = json_encode($params["description"], JSON_UNESCAPED_UNICODE);
        } else {
            $params["description"] = null;
        }

        //die(var_dump($params['price']));
        if($params["price"][0] !== "") {
            $params["price"] = json_encode($params["price"], JSON_UNESCAPED_UNICODE);
        } else {
            $params["price"] = null;
        }

        $res = $dbh->prepare('
            UPDATE workshop
            SET
                workshop_name = :name,
                workshop_description = :description,
                workshop_price = :price,
                workshop_projects = :projects,
                workshop_infos = :infos
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

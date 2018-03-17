<?php
require_once('connectionModel.php');
require_once('../functions.php');

class partnerModel extends DbConnect {

    public function getPartners() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from partner');
        $result = $res->fetchAll();

        return $result;
    }

    public function getPartnerbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM partner
            WHERE partner_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createPartner($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO partner (
                partner_name,
                partner_description,
                partner_link)
            VALUES (:name, :description, :link)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function uplinkPartner($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE partner
            SET
                partner_name = :name,
                partner_description = :description,
                partner_link = :link,
            WHERE partner_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deletePartner($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM partner
            WHERE partner_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

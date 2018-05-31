<?php
require_once('connectionModel.php');

class partnerModel extends DbConnect {

    public function getPartners() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from partners');
        $result = $res->fetchAll();

        return $result;
    }

    public function getPartnerbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM partners
            WHERE partners_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createPartner($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO partners (
                partner_name,
                partner_image,
                partner_description,
                partner_link)
            VALUES (:name, :image, :description, :link)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updatePartner($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE partners
            SET
                partner_name = :name,
                partner_image = :image,
                partner_description = :description,
                partner_link = :link
            WHERE partners_id = :id
        ');


        $result = $res->execute($params);
        return $result;
    }

    public function deletePartner($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM partners
            WHERE partners_id = :id
        ');

        $res->bindValue(':id', $id, PDO::PARAM_INT);

        $result = $res->execute();
        return $result;
    }
}
 ?>

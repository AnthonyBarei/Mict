<?php
require_once('connectionModel.php');
require_once('../functions.php');

class newsModel extends DbConnect {

    public function getOffers() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from offer');
        $result = $res->fetchAll();

        return $result;
    }

    public function getOffersbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM offer
            WHERE offer_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createNews($params) {
      $dbh = $this->connect();

      $res = $dbh->prepare('
          INSERT INTO news (
              news_title,
              news_body,
              news_link,
              news_start,
              news_end,
              news_recurrence)
          VALUES (:title, :body, :link, :start, :end, :rec)
      ');

      $result = $res->execute($params);

      return $result;
    }

    public function updateOffers($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE offer
            SET
                offer_name = :name,
                offer_date = :date
            WHERE offer_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deleteOffers($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM offer
            WHERE offer_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

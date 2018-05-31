<?php
require_once('connectionModel.php');

class newsModel extends DbConnect {

    public function getNews() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from news');
        $result = $res->fetchAll();

        return $result;
    }

    public function getNewsbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM news
            WHERE news_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function getCurrentNews(){
      $dbh = $this->connect();
      $res = $dbh->prepare('
          SELECT *
          FROM news
          WHERE news_start < (SELECT NOW())
          AND news_end > (SELECT NOW())
      ');
      $result = $res->fetchAll();

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

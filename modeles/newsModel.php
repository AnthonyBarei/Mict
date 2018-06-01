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

    public function updateNews($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE news
            SET
                news_title = :title,
                news_body = :body,
                news_link = :link,
                news_start = :start,
                news_end = :end,
                news_recurrence = :rec
            WHERE id = :id
        ');

        // die(var_dump($params));

        $result = $res->execute($params);

        //die(var_dump($result));

        return $result;
    }

    public function deleteNews($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM news
            WHERE id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

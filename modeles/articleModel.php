<?php
require_once('connectionModel.php');
require_once('../functions.php');

class articleModel extends DbConnect {

    public function getArticles() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from article');
        $result = $res->fetchAll();

        return $result;
    }

    public function getArticlebyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM article
            WHERE article_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createArticle($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO article (
                article_name,
                article_price,
                article_img,
                article_description,
                article_date)
            VALUES (:name, :price, :img, :description, :date)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updateArticle($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE article
            SET
                article_name = :name,
                article_price = :price,
                article_img = :img,
                article_description = :description,
                article_date = :date,
            WHERE article_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deleteArticle($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM article
            WHERE article_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

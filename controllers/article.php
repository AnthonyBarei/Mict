<?php require_once('../modeles/articleModele.php');

class Article {
    public function articleList() {
        $article = new articleModel();
        $result = $article->getArticles();

        // Traiter les données reçues

        return $result;
    }

    public function getArticle($id) {
        $id = (integer) $id;

        $article = new articleModel();
        $result = $article->getArticlebyId();

        // Traiter les données reçues

        return $result;
    }

    public function createArticle($params) {

        $article = new articleModel();
        $result = $article->createArticle();

        // Traiter les données reçues

        return $result;
    }

    public function updateArticle($params) {
        // Traiter les données reçues

        $article = new articleModel();
        $result = $article->updateArticle();

        // Traiter les données reçues

        return $result;
    }

    public function deleteArticle($id) {
        $id = (integer) $id;

        $article = new articleModel();
        $result = $article->deleteArticle();

        // Traiter les données reçues

        return $result;
    }
}

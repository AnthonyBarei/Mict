<?php require_once('../modeles/newsModel.php');

class News {
    public function NewsList() {
        $news = new newsModel();
        $result = $news->getNews();

        // Traiter les données reçues

        return $result;
    }

    public function getNews($id) {
        $id = (integer) $id;

        $news = new newsModel();
        $result = $news->getNewsbyId();

        // Traiter les données reçues

        return $result;
    }

    public function getCurrentNews(){
      $news = new newsModel();
      $result = $news->getCurrentNews();

      // Traiter les données reçues

      return $result;
    }

    public function createNews($params) {

        $news = new newsModel();
        $result = $news->createNews($params);

        // Traiter les données reçues

        return $result;
    }

    public function updateNews($params) {
        // Traiter les données reçues

        $news = new newsModel();
        $result = $news->updateNews($params);

        // Traiter les données reçues

        return $result;
    }

    public function deleteNews($id) {
        $id = (integer) $id;

        $news = new newsModel();
        $result = $news->deleteNews($id);

        // Traiter les données reçues

        return $result;
    }
}

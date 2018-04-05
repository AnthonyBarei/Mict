<?php require_once('../modeles/newsModel.php');

class News {
    public function NewsList() {
        $news = new newsModel();
        $result = $offer->getOffers();

        // Traiter les données reçues

        return $result;
    }

    public function getNews($id) {
        $id = (integer) $id;

        $news = new newsModel();
        $result = $offer->getNewsbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createNews($params) {

        $news = new newsModel();
        $result = $news->createNews($params);

        // Traiter les données reçues

        return $result;
    }

    public function updateOffer($params) {
        // Traiter les données reçues

        $news = new newsModel();
        $result = $offer->updateOffer();

        // Traiter les données reçues

        return $result;
    }

    public function deleteOffer($id) {
        $id = (integer) $id;

        $news = new newsModel();
        $result = $offer->deleteOffer();

        // Traiter les données reçues

        return $result;
    }
}

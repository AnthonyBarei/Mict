<?php require_once('../modeles/OfferModele.php');

class Offer {
    public function OfferList() {
        $offer = new OfferModel();
        $result = $offer->getOffers();

        // Traiter les données reçues

        return $result;
    }

    public function getOffer($id) {
        $id = (integer) $id;

        $offer = new OfferModel();
        $result = $offer->getOfferbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createOffer($params) {

        $offer = new OfferModel();
        $result = $offer->createOffer();

        // Traiter les données reçues

        return $result;
    }

    public function updateOffer($params) {
        // Traiter les données reçues

        $offer = new OfferModel();
        $result = $offer->updateOffer();

        // Traiter les données reçues

        return $result;
    }

    public function deleteOffer($id) {
        $id = (integer) $id;

        $offer = new OfferModel();
        $result = $offer->deleteOffer();

        // Traiter les données reçues

        return $result;
    }
}

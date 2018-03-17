<?php require_once('../modeles/partnerModele.php');

class Partner {
    public function partnerList() {
        $partner = new partnerModel();
        $result = $partner->getPartners();

        // Traiter les données reçues

        return $result;
    }

    public function getPartner($id) {
        $id = (integer) $id;

        $partner = new partnerModel();
        $result = $partner->getPartnerbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createPartner($params) {

        $partner = new partnerModel();
        $result = $partner->createPartner();

        // Traiter les données reçues

        return $result;
    }

    public function updatePartner($params) {
        // Traiter les données reçues

        $partner = new partnerModel();
        $result = $partner->updatePartner();

        // Traiter les données reçues

        return $result;
    }

    public function deletePartner($id) {
        $id = (integer) $id;

        $partner = new partnerModel();
        $result = $partner->deletePartner();

        // Traiter les données reçues

        return $result;
    }
}

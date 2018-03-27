<?php require_once('../modeles/workshopModele.php');

class Workshop {
    public function workshopList() {
        $ws = new workshopModel();
        $result = $ws->getWorkshops();

        // Traiter les données reçues

        return $result;
    }

    public function getWorkshop($id) {
        $id = (integer) $id;

        $ws = new workshopModel();
        $result = $ws->getWorkshopbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createWorkshop($params) {

        $ws = new workshopModel();
        $result = $ws->createWorkshop();

        // Traiter les données reçues

        return $result;
    }

    public function updateWorkshop($params) {
        // Traiter les données reçues

        $ws = new workshopModel();
        $result = $ws->updateWorkshop();

        // Traiter les données reçues

        return $result;
    }

    public function deleteWorkshop($id) {
        $id = (integer) $id;

        $ws = new workshopModel();
        $result = $ws->deleteWorkshop();

        // Traiter les données reçues

        return $result;
    }
}
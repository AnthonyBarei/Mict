<?php require_once('../modeles/goldenbookModele.php');

class Goldenbook {
    public function goldenbookList() {
        $gb = new goldenbookModel();
        $result = $gb->getGoldenbooks();

        // Traiter les données reçues

        return $result;
    }

    public function getGoldenbook($id) {
        $id = (integer) $id;

        $gb = new goldenbookModel();
        $result = $gb->getGoldenbookbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createGoldenbook($params) {

        $gb = new goldenbookModel();
        $result = $gb->createGoldenbook();

        // Traiter les données reçues

        return $result;
    }

    public function updateGoldenbook($params) {
        // Traiter les données reçues

        $gb = new goldenbookModel();
        $result = $gb->updateGoldenbook();

        // Traiter les données reçues

        return $result;
    }

    public function deleteGoldenbook($id) {
        $id = (integer) $id;

        $gb = new goldenbookModel();
        $result = $gb->deleteGoldenbook();

        // Traiter les données reçues

        return $result;
    }
}

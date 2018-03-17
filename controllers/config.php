<?php require_once('../modeles/configModele.php');

class Config {
    public function configList() {
        $conf = new configModel();
        $result = $conf->getConfigs();

        // Traiter les données reçues

        return $result;
    }

    public function getConfig($id) {
        $id = (integer) $id;

        $conf = new configModel();
        $result = $conf->getConfigbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createConfig($params) {

        $conf = new configModel();
        $result = $conf->createConfig();

        // Traiter les données reçues

        return $result;
    }

    public function updateConfig($params) {
        // Traiter les données reçues

        $conf = new configModel();
        $result = $conf->updateConfig();

        // Traiter les données reçues

        return $result;
    }

    public function deleteConfig($id) {
        $id = (integer) $id;

        $conf = new configModel();
        $result = $conf->deleteConfig();

        // Traiter les données reçues

        return $result;
    }
}

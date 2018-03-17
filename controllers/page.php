<?php require_once('../modeles/pageModele.php');

class Page {
    public function pageList() {
        $page = new pageModel();
        $result = $page->getPages();

        // Traiter les données reçues

        return $result;
    }

    public function getPage($id) {
        $id = (integer) $id;

        $page = new pageModel();
        $result = $page->getPagebyId();

        // Traiter les données reçues

        return $result;
    }

    public function createPage($params) {

        $page = new pageModel();
        $result = $page->createPage();

        // Traiter les données reçues

        return $result;
    }

    public function updatePage($params) {
        // Traiter les données reçues

        $page = new pageModel();
        $result = $page->updatePage();

        // Traiter les données reçues

        return $result;
    }

    public function deletePage($id) {
        $id = (integer) $id;

        $page = new pageModel();
        $result = $page->deletePage();

        // Traiter les données reçues

        return $result;
    }
}

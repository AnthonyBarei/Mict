<?php require_once('../modeles/userModele.php');

class User {
    public function userList() {
        $usr = new userModel();
        $result = $usr->getUsers();

        // Traiter les données reçues

        return $result;
    }

    public function getUser($id) {
        $id = (integer) $id;

        $usr = new userModel();
        $result = $usr->getUserbyId();

        // Traiter les données reçues

        return $result;
    }

    public function createUser($params) {

        $usr = new userModel();

        if(isset($params['email']) || isset($params['fix_phone']) || isset($params['mobile_phone'])) {
            $result = $usr->createUserOnlyRequired($params);
        } else {
            $result = $usr->createUser($params);
        }

        // Traiter les données reçues

        return $result;
    }

    public function updateUser($params) {
        // Traiter les données reçues

        $usr = new userModel();

        if(isset($params['address']) || isset($params['fix_phone']) || isset($params['mobile_phone'])) {
            $result = $usr->updateUserOnlyRequired($params);
        } else {
            $result = $usr->updateUser($params);
        }

        // Traiter les données reçues

        return $result;
    }

    public function deleteUser($id) {
        $id = (integer) $id;

        $usr = new userModel();
        $result = $usr->deleteUser();

        // Traiter les données reçues

        return $result;
    }
}

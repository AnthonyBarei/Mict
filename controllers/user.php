<?php require_once('../modeles/userModele.php');

class User {
    public function userList() {
        $usr = new userModel();
        $result = $usr->getUsers();

        return $result;
    }

    public function getUser($id) {
        $id = (integer) $id;

        $usr = new userModel();
        $result = $usr->getUserbyId();

        return $result;
    }

    public function createUser($params) {
        $p = [
            'user_firstname' => ['type' => 'string', 'required' => true],
            'user_lastname' => ['type' => 'string', 'required' => true],
            'user_password' => ['type' => 'string', 'required' => true],
            'user_email' => ['type' => 'string', 'required' => true],
            'user_fix_phone' => ['type' => 'string'],
            'user_mobile_phone' => ['type' => 'string'],
            'user_address' => ['type' => 'string'],
            'user_type' => ['type' => 'boolean', 'required' => true],
            'user_isadmin' => ['type' => 'boolean', 'required' => true]
        ];

        checkParams($params, $p);

        $usr = new userModel();
        $result = $usr->createUser();

        return $result;
    }

    public function updateUser($params) {
        $usr = new userModel();
        $result = $usr->updateUser();

        return $result;
    }

    public function deleteUser($id) {
        $id = (integer) $id;

        $usr = new userModel();
        $result = $usr->deleteUser();

        return $result;
    }
}

<?php
require_once('connectionModel.php');
require_once('../functions.php');

class userModel extends DbConnect {

    public function getUsers() {

        $dbh = $this->connect();

        $res = $dbh->query('select * from user');
        $result = $res->fetchAll();

        return $result;
    }

    public function getUserbyId($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            SELECT *
            FROM user
            WHERE user_id = :id
        ');

        $res->bindParam(':id', $id);

        $res->execute();

        $result = $res->fetch();

        return $result;
    }

    public function createUser($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            INSERT INTO user (
                user_firstname,
                user_lastname,
                user_password,
                user_email,
                user_fix_phone,
                user_mobile_phone,
                user_address,
                user_type,
                user_isadmin)
            VALUES (:firstname, :lastname, :password, :email, :fix, :mobile, :address, :type, :isadmin)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updateUser($params) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            UPDATE user
            SET
                user_firstname = :firstname,
                user_lastname = :lastname,
                user_password = :password,
                user_email = :email,
                user_fix_phone = :fix,
                user_mobile_phone = :phone,
                user_address = :address,
                user_type = :type,
                user_isadmin = :isadmin
            WHERE user_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function createUserOnlyRequired($params) {
        $dbh = $this->connect();

        $rows = "";
        $conditions = "";
        foreach ($params as $key => $param) {
            if($key === "address" || $key === "fix_phone" || $key === "mobile_phone") {
                $key = (string) $key;
                $rows = $rows . "user_" . $key . ", ";
                $conditions = $conditions . ":" . $key . ", ";
            }
        }

        $res = $dbh->prepare('
            INSERT INTO user (
                user_firstname,
                user_lastname,
                user_password,
                '.$rows.'
                user_email,
                user_type,
                user_isadmin)
            VALUES (:firstname, :lastname, :password, '.$conditions.' :email, :type, :isadmin)
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function updateUserOnlyRequired($params) {
        $dbh = $this->connect();

        $req = "";
        foreach ($params as $key => $param) {
            if($key == "address" || $key == "fix_phone" || $key == "mobile_phone") {
                $req += "user_".$key." = ".":".$key.", ";
            }
        }

        $res = $dbh->prepare('
            UPDATE user
            SET
                user_firstname = :firstname,
                user_lastname = :lastname,
                user_password = :password,
                '.$req.'
                user_email = :email,
                user_type = :type,
                user_isadmin = :isadmin
            WHERE user_id = :id
        ');

        $result = $res->execute($params);

        return $result;
    }

    public function deleteUser($id) {
        $dbh = $this->connect();

        $res = $dbh->prepare('
            DELETE FROM user
            WHERE user_id = :id
        ');

        $res->bindParam('id', $id);

        $result = $res->execute();

        return $result;
    }
}
 ?>

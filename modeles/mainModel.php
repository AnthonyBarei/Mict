<?php require_once('connectionModel.php');

/**
 *
 */
class mainModel extends DbConnect
{

    public function selectAll($table) {
        $dbh = $this->connect();

        $res = $dbh->prepare('SELECT * FROM :table');

        $res->bindParam(':table', $table);

        $res->execute();

        $result = $res->fetchAll();

        return $result;
    }

    public function select($rows = array(), $table, $conditions = array()) {
        $dbh = $this->prepare();

        $req = "SELECT ";

        foreach($rows as $key => $row) {
            if($key !== end($rows)) {
                $req += $row.', ';
            } else {
                $req += $row;
            }
        }

        $req += " FROM ".$table. " WHERE ";

        foreach ($conditions as $key => $condition) {
            if($key !== end($conditions)) {
                $req += $key." = ".$condition." AND";
            } else {
                $req += $key." = ".$condition;
            }
        }

        $res = $dbh->prepare($req);

        $result = $res->fetch();

        return $result;
    }

    // post

    // update

    //delete
}

<?php

include ("config.php");


class main extends sqlconfig {

    public function __construct() {
        parent::__construct();

    }

    public function getfSQL($query) {

        $result = $this->conn->query($query);

        if ($result == false) {
            return false;
        }

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }


    public function run($query) {
        $result = $this->conn->query($query);

        if ($result == false) {
            return false;
        } else {
            return true;
        }
    }



    public function escape_string($value) {
        return $this->conn->real_escape_string($value);
    }



}

class Validation {
    public function check_empty($data, $fields)
    {
        $msg = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $msg .= "$value field is empty. <br />";
            }
        }
        return $msg;
    }
}

?>
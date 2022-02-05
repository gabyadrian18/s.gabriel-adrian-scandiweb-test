<?php

class sqlconfig {

    private $_sqlhostname = 'sql203.epizy.com';
    private $_sqlusername = 'epiz_30984901';
    private $_sqlpassword = 'UnVMg2Mj0BH';
    private $_sqldatabase = 'epiz_30984901_scandiwebtest';

    protected $conn;

    public function __construct() {
        if (!isset($this->conn)) {
            $this->conn = new mysqli($this->_sqlhostname, $this->_sqlusername, $this->_sqlpassword,
                $this->_sqldatabase);

            if (!$this->conn) {

                echo 'Unable to connect to SQL.';
                exit;

            }
        }

        return $this->conn;

    }

}

?>



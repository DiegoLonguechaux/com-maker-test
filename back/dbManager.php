<?php
    /**
    * Database Connection
    */
    class dbManager {
        private $server = 'localhost';
        private $dbname = 'test';
        private $user = 'root'; /* TO DO */
        private $pass = ''; /* TO DO */
        public function connect() {
            try {
                $conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname . ';charset=utf8', $this->user, $this->pass, [PDO::ATTR_PERSISTENT => true]);
                return $conn;
            } catch (\Exception $e) {
                echo "Database Error: " . $e->getMessage();
            }
        }
    }
?>
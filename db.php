<?php

class db {
    // Database connection info
    private $servername;
    private $username;
    private $password;
    private $dbname;

    // Create connection to database
    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = getenv('databasepass');
        $this->dbname = "products";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        return $conn;
    }
}
<?php

class Dbh {
    // Database connection info
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $port;

    // Create connection to database
    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = getenv('databasepass');
        $this->dbname = "products";
        $this->port = "8000";

        // Inialize new connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Error occured: " . $conn->connect_error);
        }
        
        return $conn;
    }
}
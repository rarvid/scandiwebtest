<?php

// Class for creating connection to mySQL database
class Dbh {
    // Database connection info
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $port;

    // Create connection to database and return the created connection
    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = getenv('databasepass');
        $this->dbname = "products";
        $this->port = "3306";

        // Inialize new connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname, $this->port);

        // Throe error if connection to database failed
        if ($conn->connect_error) {
            die("Error occured: " . $conn->connect_error);
        }
        
        return $conn;
    }
}

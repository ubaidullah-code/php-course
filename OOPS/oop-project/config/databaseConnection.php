<?php

    class database {
        protected $conn;
        private $host;
        private $username;
        private $password;
        private $dbname;
        private $port;
        protected function connect()
        {
            
            $this->host = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = 'learning_database';
            $this->port = 3307;
            
            if($this->conn === null)
            {
            $this->conn = new mysqli(
                $this->host,
                $this->username,
                $this->password,
                $this->dbname,
                $this->port
            );
        }
        if($this->conn->connect_error)
        {
            die("Database connected failed" .$this->conn->connect_error);
        }
            return $this->conn;
        }

    };
   


    

?>
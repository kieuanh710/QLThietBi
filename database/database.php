<?php
class Dbh{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "bt5";
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
        // $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        
    }
}
    
?>
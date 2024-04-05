<?php
// parent


class Database
{
  private $server_name = "localhost";
  private $username    = "root";
  private $password    = "";
  private $db_name     = "the_company";
  protected $conn;

  public function __construct()
  {
    $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
    // $this->conn holds the connection to the db
    // $this->conn is now the object of the class mysqli

    if ($this->conn->connect_error) {
      die("Unable to connect to the database: " . $this->conn->connect_error);
    }
  }
}

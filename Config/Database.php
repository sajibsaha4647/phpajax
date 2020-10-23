<?php 
// $filepath = realpath(dirname(__FILE__));

class Database{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "phpajax";


 
    public $conn;
    public $error;

    public function __construct()
    {
        $this->Dbconnection();
    }


    public function Dbconnection(){
        if(!isset($this->conn)){
            $this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
            if (!$this->conn) {
                $this->err =  '<div class="alert alert-danger" role="alert">
                <strong>Problem!</strong> database connection error
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
                echo $this->err;
            }
        }
    }

     public function select($query)
    { //select data
        $select = $this->conn->query($query);
        if ($select->num_rows > 0) {
            return $select;
        } else {
            return false;
        }
    }
    public function insert($query)
    { //insert data
        $insert = $this->conn->query($query);
        if ($insert) {
            return $insert;
        } else {
            return false;
        }
    }
    public function update($query)
    { //update data
        $update = $this->conn->query($query);
        if ($update) {
            return $update;
        } else {
            return false;
        }
    }
    public function delete($query)
    { //delete data
        $delete = $this->conn->query($query);
        if ($delete) {
            return $delete;
        } else {
            return false;
        }
    }
}

?>
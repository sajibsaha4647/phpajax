<?php 
$filepath = realpath(dirname(__DIR__));
include_once($filepath . '../Config/Database.php');
// include_once($filepath . '../helpers/formate.php');
class Project{

   public $db;
    public $tableName = "ajax_user";
    public function __construct()
    {
        $this->db = new Database();
    }

    public function checkusername($ajax_username){
        $sql = "SELECT * FROM $this->tableName where ajax_username='$ajax_username'";
        $show = $this->db->select($sql);

        if($ajax_username == ''){
            echo "user name is empty";
            exit();
        }else if($show){
            echo "$ajax_username name is not available";
             exit();
        }else {
            echo "$ajax_username name is available";
             exit();
        }
        // echo "$ajax_username";
    }



    public function  CheckSkill($skill){
        $sql = "SELECT * FROM $this->tableName where ajax_username like '%$skill%'";
        $getskill = $this->db->select($sql);
        $result = "";
        $result .= "<div class='skill'><ul>";
        if($getskill){
            while($data =$getskill->fetch_assoc() ){
                    $result .= "<li data-name=".$data['ajax_username'].">" .$data['ajax_username']. '</li>'; 
            }
        }else{
             $result .= '<li>No result Found</li>'; 
        }
        $result .= "</ul></div>"; 
        echo $result;
    }

    public function checkrefresh($name){
        $sql = "INSERT INTO ajax_user(ajax_username)values('$name')";
         $refresh = $this->db->insert($sql);
         if($refresh){
            //  echo "data inserted";
         }else{
            //  echo "data Not inserted";
         }
    }


    public function GetdatawithoutRefresh(){
         $sql = "SELECT * FROM $this->tableName ORDER BY ajax_id desc";
        $getskill = $this->db->select($sql);
        $result = "";
        $result .= "<div class='skill'><ul>";
        if($getskill){
            while($data =$getskill->fetch_assoc() ){
                    $result .= "<li data-name=".$data['ajax_username'].">" .$data['ajax_username']. '</li>'; 
            }
        }else{
             $result .= '<li>No result Found</li>'; 
        }
        $result .= "</ul></div>"; 
        echo $result;
    }
}



?>
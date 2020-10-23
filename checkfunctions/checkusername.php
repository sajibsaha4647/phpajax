<?php 
$filepath = realpath(dirname(__DIR__));
include_once($filepath . '../Config/Project.php');
$proj = new Project();

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['username'];
    $user = $proj->checkusername($username);
}



?>
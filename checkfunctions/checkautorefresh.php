<?php 
$filepath = realpath(dirname(__DIR__));
include_once($filepath . '../Config/Project.php');
$proj = new Project();


    if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST['name'];
    $user = $proj->checkrefresh($name);
}

?>
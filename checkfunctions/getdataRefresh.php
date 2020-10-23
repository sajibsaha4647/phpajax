<?php 
$filepath = realpath(dirname(__DIR__));
include_once($filepath . '../Config/Project.php');
$proj = new Project();
$user = $proj->GetdatawithoutRefresh();


?>
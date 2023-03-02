<?php 
     require_once 'class.insertTosql.php';
     $request_method = $_SERVER['REQUEST_METHOD'];
     $test = new insertTosql();
     echo "test";

     if($request_method =="POST"){
       $content = trim(file_get_contents("php://input"));
       $decoded = json_decode($content,true);
       $test->add_data($decoded);
     }
     else{
       echo " Not implement now...";
     }
?>
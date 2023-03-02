<?php
  require_once 'sendtosql.php';
  $request_method = $_SERVER['REQUEST_METHOD'];
  $tmp =  new insertTosql();

if($request_method=="POST"){
    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content,true);
    $tmp->add_data($decoded);
  }
  else{
    echo " Not implement now...";
  }
?>

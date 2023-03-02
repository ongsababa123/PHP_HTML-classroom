<?php
  require 'class.customer.php';
  $request_method = $_SERVER['REQUEST_METHOD'];
  $cust = new customer();
  if($request_method=="GET"){
    if(isset($_GET['page'])){
      $result = $cust->selectPage($_GET['page'], $_GET['perpage']);
      echo $result;
    }
  }
  else if($request_method=="POST"){
    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content,true);
    $cust->add_customer($decoded);
  }
  else{
    echo " Not implement now...";
  }
?>

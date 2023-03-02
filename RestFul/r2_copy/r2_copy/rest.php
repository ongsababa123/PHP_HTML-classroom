<?php
  require 'class.customer.php';
  $request_method = $_SERVER['REQUEST_METHOD'];
  $cust = new customer();
  if($request_method=="GET"){
    $result = $cust->selectPage($_GET['page'], $_GET['perpage']);
    echo $result;
  }else{
    echo " Not implement now...";
  }
?>

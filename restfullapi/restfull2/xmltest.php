<?php
  require_once 'class.customer.php';
  $cust = new customer();

  $requestMethod = $_SERVER["REQUEST_METHOD"];
  $response = array();
  $response["code"]= $requestMethod;

  /*
  $content = trim(file_get_contents("php://input"));
  $decoded = (array) json_decode($content);
  $response["name"] = $decoded["name"];
  $response["text"] = $decoded;
  $response["ID"] = $_GET["id"];
  */

  if($requestMethod=="POST"){
    $content = trim(file_get_contents("php://input"));
    $decoded = (array) json_decode($content);

  }
  else if($requestMethod=="PUT"){
    $content = trim(file_get_contents("php://input"));
    $decoded = (array) json_decode($content);
  }
  else if($requestMethod=="GET"){
    // show page no body send?
    $cust->selectPage($_GET["page"], $_GET['perpage']);
  }
  else if($requestMethod=="DELETE"){
    $content = trim(file_get_contents("php://input"));
    $decoded = (array) json_decode($content);

  }
  else{

  }
  //echo json_encode($response);
?>

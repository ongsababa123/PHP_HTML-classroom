<?php
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $respone = array();
    $respone["code"] = $requestMethod;
    $content = trim(file_get_contents("php://input"));
    $decoded = (array) json_decode($content);

    $respone['text'] = $content ;
?>
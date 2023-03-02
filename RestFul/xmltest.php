<?php
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $respone = array();
    $respone["code"] = $requestMethod;
    echo "<hr>POST";
    print_r($_POST);
    echo "<hr>GET";
    print_r($_GET);
    echo "<hr>DELETE";
    print_r($_DELETE);
    echo "<hr>PUT";
    print_r($_PUT);
    echo json_encode($respone);
?>
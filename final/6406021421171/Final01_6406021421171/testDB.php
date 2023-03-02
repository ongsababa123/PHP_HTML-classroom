<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
</head>
<body>

<?php
require_once 'Employee.php';
  $tmp =  new Employee();
?>

<center>
    <h2>Menu</h2>

    <form action = "testDB.php" method = "post">
        <input type="hidden" name="cammand" value = "creatTable">
        <input type="submit" value="ShowTable">
    </form>

    </center>
</body>
</html>

<?php 
        require_once 'Employee.php';
        $request_method = $_SERVER['REQUEST_METHOD'];
        $emp = new Employee();
        if($request_method  == "POST"){
            $cammand = $_POST["cammand"];
            if($cammand == "creatTable"){
                $emp -> ShowEmployeeByID();
            }
            if($cammand == "insert"){
               
            }

        }
?>

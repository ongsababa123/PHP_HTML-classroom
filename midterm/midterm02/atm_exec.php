<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <a>Welcome</a>
    <h2>ATM</h2>
   <?php 
       require_once 'Midterm02_6406021421171.php';
       session_start();
       
       foreach ($_SESSION['member'] as $key=>$name) {
        echo "$name"."<br>";
    }   
   ?>
   <a>Activate Success</a>
   <a href="atm_menu.php">goto menu</a>
</body>
</html>
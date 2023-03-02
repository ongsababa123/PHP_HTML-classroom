<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activate</title>
</head>
<body>
    <a>Account Created</a>
    <h2>ATM</h2>
    <form action="atm_exec.php" method="post">
        <input type="submit" name="submit" value="Activate">
    </form>
</body>
</html>

<?php
    
    require_once 'Midterm02_6406021421171.php';
    session_start();
    $name = $_REQUEST['name'];
    $balance = 0;
    $_SESSION['member'] = new member($name, $balance);
    $a = $_SESSION['member'];
    $a->active();
    print_r($a);

?>

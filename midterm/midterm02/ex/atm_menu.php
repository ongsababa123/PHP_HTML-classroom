<?php
require_once "account.php";
if (isset($_POST['reg'])) {
    $a1 = new member($_POST['uname']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>ATM</h1>
    <?php if ($_SESSION['member']['status'] == 0) { ?>
        <form action="atm_exec.php" method="post">
            Account Created<br><br>

            <input type="submit" name="action" value="activate">
        </form>
    <?php } else { ?>
        <form action="atm_exec.php" method="post">
            <input type="submit" name="action" value="check balance"><br>
            <input type="submit" name="action" value="deposit"><br>
            <input type="submit" name="action" value="withdraw"><br>
            <input type="submit" name="action" value="logout"><br>
        </form>
    <?php } ?>
</body>

</html>
<?php
require_once "account.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Welcome</h1>
    <?php
    if ($_POST['action'] == 'activate') {
        $a1 = new member($_SESSION['member']['name'], $_SESSION['member']['balance']);
        echo $_SESSION['member']['name'] . '<br>';
        echo "Activate Success <br>";
        $a1->active();
    } else if ($_POST['action'] == 'check balance') {
        $a1 = new member($_SESSION['member']['name'], $_SESSION['member']['balance']);
        $a1->active();
        echo $a1->get_balance();
    } else if ($_POST['action'] == 'deposit') {
    ?>

        <form action="atm_transaction.php" method="post">

            Amount : <input type="number" name="amount">
            <input type="submit" name="deposit" value="exec">
        </form>
    <?php
    } else {
    ?>
        <form action="atm_transaction.php" method="post">
            Amount : <input type="number" name="amount">
            <input type="submit" name="withdraw" value="exec">
        </form>
    <?php } ?>
    <br><br>
    <a href="atm_menu.php">go to menu</a>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    require_once "account.php";
    if (isset($_POST['deposit'])) {
        $a1 = new member($_SESSION['member']['name'], $_SESSION['member']['balance']);
        $a1->active();
        $a1->deposit($_POST['amount']);
    } else {
        $a1 = new member($_SESSION['member']['name'], $_SESSION['member']['balance']);
        $a1->active();
        $a1->withdraw($_POST['amount']);
    }

    ?>
    <br><br>
    <a href="atm_menu.php">go to atm menu</a>
</body>

</html>
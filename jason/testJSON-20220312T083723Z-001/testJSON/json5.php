<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $str = isset($_GET['data'])?$_GET['data']:"Unknown";
        $data = json_decode($str,true);

    ?>

    <p id="name"><?= $data['name']?></p>
    <p id="age"><?= $data['age']?></p>
    <p id="gender"><?= $data['Gender']?></p>
</body>
</html>
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
    <h1>
        Myname : <br>
        <?= isset($_GET['data'])? $data['name'] : "Unknown" ?>
    </h1>

    <h1>
        Age : <br>
         <?= isset($_GET['data'])? $data['age'] : "Unknown" ?>
    </h1>

    <h3>
        Gender: 
        <?= isset($_GET['data'])? $data['Gender'] : "Unknown" ?>
    </h3>

</body>
</html>

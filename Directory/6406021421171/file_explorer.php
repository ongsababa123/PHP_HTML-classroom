<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="back.php" method="post" >
        <?php 
               $d = opendir(getcwd());
               echo "<select name = 'data'>";
               while($data = readdir($d)){
                       echo "<option value = '$data' >$data</option>";
               }
               echo "</select>";
        ?>
        <input type="submit" name = "ok">
    </form>

</body>
</html>
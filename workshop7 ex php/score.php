<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex</title>
</head>
<body>
    <form class="" action="index.html" method="post">
     Midterm <input type="number" id="Midterm" name="Midterm" min="1" max="5" />
    <br>
    <br>
     Final 
    <select class="" name="">
        <?php
        $i = 0;
            while ($i <= 35){
                
            echo "<option value='$i'>$i</option>";
            $i++;
            }
        ?>
    </select>
    <br>
    <br>
    <input type="submit" value="senddata">
    <input type="reset" value="clear">
    </form>
</body>
</html>
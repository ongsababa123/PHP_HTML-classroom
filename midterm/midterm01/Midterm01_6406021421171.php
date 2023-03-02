<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>midterm 01</title>
</head>

<body>
    <form action="" method="post">
    เลือกสูตรคูณแม่ <select class="" name="number">
            <?php
            for ($i = 2; $i <= 24; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" name="show" value="show">
    </form>

    <link rel="stylesheet" href="Midterm01_6406021421171.css">
<?php
$number = $_POST['number'];

    echo '
    <link rel="stylesheet" href="Midterm01_6406021421171.css">
    
    <table align="center">
      <tr>
        <th colspan="3">คะแนนที่ได้</th>
      </tr>';
      for ($i=1; $i < 13; $i++) { 
      
    echo
      "<tr>".
        "<td>".$number." x ".$i."</td>".
        "<td>"."="."</td>".
        "<td>".$number * $i."</td>".
      "</tr>";
      }
   echo' </table>';
      
    ?>
</body>

</html>
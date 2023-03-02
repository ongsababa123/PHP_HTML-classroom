<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="" action="gradeart.php" method="post">
        <p>Input type number 0-30</p>
        Midterm : <input type="number" name="midterm" value="" min="0" max="30" >
        <p>Select option 0-35</p>
    Final : <select class="" name="final">
    <?php
      for($i=0; $i<=35;$i++){
        echo "<option value='$i'>$i</option>";
      }
    ?>
  </select>
  <p>Assignment</p>
  <input type="checkbox" name="Assignment" value="5">checkbox5<br>
  <input type="checkbox" name="Assignment" value="10">checkbox10<br>
  <input type="checkbox" name="Assignment" value="20">checkbox20<br><br>
  <input type="submit" name="submit" value="Send">
  <input type="reset" name="reset" value="clear"><br>
</form>
</body>
</html>
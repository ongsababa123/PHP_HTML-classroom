<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shophee</title>
</head>
<body>
    <h2>Add item</h2>
    <form action="" method="post">
        name Item <input type="text" name="name" id="name"><br>
        item number <input type="text" name="item" id="item"><br><br>
        action : <br><br>
     
        <input type="radio" name="additem" <?php if (isset($check) && $check=="additem") echo "checked";?> value="additem">additem
        <input type="radio" name="removeitem" <?php if (isset($check) && $check=="removeitem") echo "checked";?> value="removeitem">removeitem

        <input type="submit" id="submit" name="submit" value="lookaddcart">
        <input type="reset" id="reset" name="reset" value="clear">
    </form>
</body>
</html>


<?php
require_once 'cart.php';
    session_start();

    $name = $_POST['name'];
    $item = $_POST['item'];
  
 
  
  $mycart = new ShoppingCart();
  $_SESSION['cart']= array(
    $name => [$item]
   );
  

$mycart->clear();

 ?>
<pre>
<?php
  echo 'Current PHP version: '. phpversion()."<br>";
  print_r($_SESSION);
?>
</pre>
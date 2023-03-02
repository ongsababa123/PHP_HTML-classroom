<?php
  
  require_once 'cart.php';
  $mycart = new ShoppingCart();
  $mycart->addItem(" Ryzen9XT", 20);
  $mycart->addItem("AMD Ryzen9XT", 20);
 ?>
<pre>
<?php
  echo 'Current PHP version: '. phpversion()."<br>";
  print_r($mycart);
?>
</pre>
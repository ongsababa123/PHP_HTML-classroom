<h1>Add Item</h1>
<form action="test.php" method="POST">
    <p>Item Name</p>
    <input type="text" name="name"><br><br>
    <input type="number" name="num">
    <p>Action</p>
    <input type="radio" name="action" value="add"><label for="">Add item</label>
    <input type="radio" name="action" value="remove"><label for="">remove item</label><br>
    <input type="submit" name="submit" value="look at cart">
    <input type="reset" name="reset" value="clear">
</form>
<pre>
<?php
    require_once('cart.php');
    session_start();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = new ShoppingCart();
    }else{
        if(isset($_REQUEST["submit"])){
            $name = $_REQUEST['name'];
            $num = $_REQUEST['num'];
            $action = $_REQUEST['action'];

            $cart = $_SESSION['cart'];
            if($action == 'add'){
                echo "add";
                $cart->addItem($name,$num);
            }
            if($action == 'remove'){
                echo "remove";
                $cart->removeItem($name,$num);
            }
            elseif ($action == '') {
                echo "<br>"."please! select action"."<br>";
            }
            print_r($cart);
        }
        elseif (isset($_REQUEST["clear"])){} {
            session_unset();

        }
    }
?>
</pre>
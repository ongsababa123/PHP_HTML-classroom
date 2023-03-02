<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex</title>
</head>
<body>
   <?php 
        $i = 0;
        $buy = "";
        $x = $_POST["nuggets"];
        echo "$x";

        if($x == 6){
            echo "สามารถสั่งชุด Size";
            $size = "S";
        }
        if($x == 9){
            echo "สามารถสั่งชุด Size";
            $size = "M";
        }
        if($x == 20){
            echo "สามารถสั่งชุด Size";
            $size = "XL";
        }
        if($x >= 7 && $x < 9){
            $i++;
            $size1 = $x - 12;
            $size2 = $x - 9;
            echo "สามารถสั่งชุด Size";

        }
   ?>
   <!-- <form method="POST" action="">

   <input type="radio" name="size" >
   <?php 
   if($i = 0){
        echo "<value='$size'>$size </value>";
   }
   if($i = 1){
    echo "<value='$size'>$size </value>";
    echo "<value='$size1>$size1 </value>";
    echo "<value='$size2'>$size2 </value>";
}
   ?> 
   </form> -->

   <?php 
   ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register equipment</title>
</head>
<body>
    <center>
    <form method="post" action="regis_equipment.php" >
        <h2>Register Equipment</h2> </h2><br>
        name Equipment <input type="text" name="name_eq" id="name_eq"> <br><br>
        <input type="submit" name="ok" id ="_ok" value ="Register"> <br><br>
        
    </form>
    <button onclick="document.location='menu.php'">BACK TO MENU</button>
</body>
</html>

<pre>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "preass";
    ?>

<?php
$conn = new mysqli($servername, $username, $password, $db);

$requestMethod = $_SERVER['REQUEST_METHOD'];
// if($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
if ($requestMethod == 'POST'){

    $name = $_POST['name_eq'];
    $sql = "INSERT INTO equipment (`name`) VALUES ('$name');";
    $myquery = $conn->query($sql);

    echo "<script>alert('Register success')</script>";

}
        
?>
</pre>



<pre>
    <?php
    define('servername', 'localhost');
    define('username', 'U_6406021421171');
    define('password', 'n5Sp!Dr()h1qoclL');
    define('db','testlogin')
    ?>
<?php
$name = $_POST['_name'];
$password = $_POST['_password'];
print_r($name, $password);
$conn = new mysqli(servername, username, password, db);

$sql = "SELECT * FROM `infomation` WHERE `name`='$name' and `password`= '$password'";

$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_row($result)){
            echo "<center><center>Name : ".$row[1]. "<br>";
            echo "<img style='width:100px;' src='".'uploads/'.$row[3]."'/>&nbsp;<br>
            <a href='login.html'>Logout</a></center>"; 
            
        }
		
	
?>
</pre>


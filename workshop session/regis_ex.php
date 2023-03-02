
<pre>
    <?php
    define('servername', 'localhost');
    define('username', 'U_6406021421171');
    define('password', 'n5Sp!Dr()h1qoclL');
    define('db','testlogin')
    ?>

<?php
$target_dir = "uploads/";


$name = $_POST['name'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];

$pic = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$pic2 = basename($_FILES["fileToUpload"]["name"]);

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pic)){
    echo "Success: upload completed<br>";
    echo "The file ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded to server.";
} else {
    echo "Sorry, there was an error uploading your file.";
    }

$conn = new mysqli(servername, username, password, db);
if ($cfpassword != $password) {
    echo "<br>";
    die("Password is not correct");
    
} 
else if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
        echo "Connected successfully";

        $sql = "INSERT INTO infomation (`name`, `password`, `picture`) VALUES ('$name', '$password', '$pic2');";
        
        $myquery = $conn->query($sql);
     }

?>
</pre>

<a href="login.html">Back to Login</a> 



<pre>
    <?php
     define('servername', 'localhost');
     define('username', 'U_6406021421171');
     define('password', 'n5Sp!Dr()h1qoclL');
     define('db','testlogin')
     ?>
<?php
$conn = new mysqli(servername, username, password, db);

$name = $_POST['_name'];
$password = $_POST['_password'];

$sql = "SELECT * FROM `infomation` WHERE `name`='$name' and `password`= '$password'";



$myquery = $conn->query($sql);

$data = $myquery->fetch_all(MYSQLI_ASSOC);


if ($data == false) {
    echo "<center><h2>password or username not found<br>";
    echo "wait 2 seconds back to login page</h2>";
    echo  "<img src='https://media4.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif?cid=ecf05e473d0qnvsy3mcesj5s9d2pein6jjgezxjsxry2hz9w&rid=giphy.gif&ct=g' ></center>";
    header('refresh:2; url = login.html');
}
else{
    echo "
    <form action='menu.php' method='post' enctype='multipart/form-data'>
   
           <input type='text' name='_name' id ='_name' value ='".$name."' hidden ><br>
           <input type='text' name='_password' id ='_password' value ='".$password."' hidden ><br>
           <center>
               <h1>เข้าสู่ระบบ สำเร็จ</h1>
           <input type='submit' name='ok' id ='_ok' value ='แสดงข้อมูล'></center>
   </form>";
   
    //header('location:menu.php');
}

?>
</pre>
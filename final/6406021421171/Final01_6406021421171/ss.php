Jirapat Chookleeb
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "testDB.php" method = "post">
        <input type="hidden" name="cammand" value = "creatTable">
        <input type="submit" value="CreatTable">
    </form>
    <form action = "testDB.php" method = "post">
        <input type="hidden" name="cammand" value = "insert">
        Name<input type="text" name="name">
        BirthYear<input type="text" name="BirthYear">
        Salary<input type="text" name="Salary">
        <input type="submit">
    </form>
    <!-- <form action = "testDB.php" method = "post">
        <input type="hidden" name="cammand" value = "creatTable">
        <input type="hidden" name="cammand" value = "creatTable">
        <input type="submit">
    </form> -->
</body>
</html>

<?php 
        require_once 'class.Emplyee.php';
        $request_method = $_SERVER['REQUEST_METHOD'];
        $emp = new employeeManage();
        if($request_method  == "POST"){
            $cammand = $_POST["cammand"];
            if($cammand == "creatTable"){
                $emp -> creat_table();
            }
            if($cammand == "insert"){
               
            }

        }
?>
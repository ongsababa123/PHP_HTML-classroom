<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "cal.php">
        <!-- ชื่อ - นามสกุล -->
        รหัสนักศึกษา<input type="text" name = "codestd">ชื่อ - นามสกุล<input type="text" name = "name"><br>
        <!-- มาเรียน -->
        มาเรียน
        <?php for ($i=0; $i < 15; $i++) { ?>
            <input type = "checkbox" name = "a" value = "1">
            <?php } ?>
        รวม<input type="text" name = "output"> ครั้ง<br>
        
        <!-- assingment -->
        Assingment
        <input type="checkbox" name = "ass1">ได้ <input type="number" name = "scoreass1" min = "0" max = "5">
        <input type="checkbox" name = "ass2" >ได้ <input type="number" name = "scoreass2"min = "0" max = "10">
        <input type="checkbox" name = "checkbox1">ได้<input type="number" name = "scoreass3"min = "0" max = "10"><br>

        <!-- midterm -->
        <input type="checkbox" name = "checkbox1">Midterm ได้ <input type="number" name = "mid1" min="0" max="20">
        ได้ <input type="number" name = "mid2" min="0" max="25">ได้ <input type="number" name = "mid3" min="0" max="35">คะแนน<br>

        <!-- final -->
        <input type="checkbox" name = "checkbox1">Final 
        ได้ <input type="number" name = "fin1" min="0" max="40">
        ได้ <input type="number" name = "fin2" min="0" max="60"><br>

        <!-- sum -->
        รวม   <br>
        <input type="submit" value="submit" name = "submit">

    </form>
</body>
</html>
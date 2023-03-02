<?php 
    $input = $_POST["data"];
    $d = opendir(getcwd());
    $fname = explode(".",$input);
    if($input == '..'){
        chdir("../..");
        echo getcwd()."<br>";
        echo "change directory completed.";
    }
    if($fname[1] != " "){
        echo "เป็นไฟล์ประเภท ".$fname[1]."<br>";
        if($fname[1] == "png"){
            echo "<img src = '$input'>";
        }else if($fname[1] == "txt"){
            echo "...open file...".$input;
            $f = fopen($input,"r");
            $data = fread($f,filesize($input));
            echo "<br>".$data;
            fclose($f);
            echo "<br><a href='delete.php'>ลบไฟล์</a><br>";
            echo "<a href='rename.php'>เปลี่ยนชื่อไฟล์</a>";
        }
    }
?>






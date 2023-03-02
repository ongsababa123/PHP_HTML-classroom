<?php
        $name = $_POST['name'];
        $codestd = $_POST['codestd'];
        echo "รหัสนักศึกษา ".$codestd."<br>ชื่อนักศึกษา ".$name;
        echo cal_grade($sumgrade)."เกรดที่ได้ ";
?>

    <?php 
        function cal_grade() {
            // socre assingment
            $scoreass1 = $_POST['scoreass1'];
            $scoreass2 = $_POST['scoreass2'];
            $scoreass3 = $_POST['scoreass3'];
            $allass = $scoreass1+$scoreass2+$scoreass3;
            
            // midterm
            $mid1 = $_POST['mid1'];
            $mid2 = $_POST['mid2'];
            $mid3 = $_POST['mid3'];
            $allmid = $mid1+$mid2+$mid3;
            $summid = ($allmid/80)*35;
            // final
            $fin1 = $_POST['fin1'];
            $fin2 = $_POST['fin2'];
            $fin3 = $_POST['fin3'];
            $allfin = $fin1+$fin2+$fin3;
            $sumfin = ($allfin/100)*35;

            $sumscore = ($allass+$summid)+($sumfin);
            $sumgrade = $sumscore;

            if ($summid != 0 || $sumfin != 0) {
                if ($sumgrade >=80 && $sumgrade <= 100) { echo "A";}
                if ($sumgrade >=75 && $sumgrade <= 79) { echo "B+";}
                if ($sumgrade >=70 && $sumgrade <= 74) { echo "C+";}
                if ($sumgrade >=65 && $sumgrade <= 69) { echo "C";}
                if ($sumgrade >=60 && $sumgrade <= 64) { echo "D+";}
                if ($sumgrade >=55 && $sumgrade <= 59) { echo "D+";}
                if ($sumgrade >=0 && $sumgrade <= 54) { echo "F";}
            }else echo "FA";
        }
    ?>
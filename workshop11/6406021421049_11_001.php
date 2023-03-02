<?php 
    echo "45 = Grade ".cal_grade(45)."<br>";
    echo "69 = Grade ".cal_grade(69)."<br>";
    echo "90 = Grade ".cal_grade(90)."<br>";
?>

<?php 
    function cal_grade($score){
        if($score >= 80 && $score <= 100) $grade = 4;
        else if($score >= 70 && $score <= 79) $grade = 3;
        else if($score >= 60 && $score <= 69) $grade = 2;
        else if($score >= 50 && $score <= 59) $grade = 1;
        else $grade = 0;  
        return $grade;
    }
?>

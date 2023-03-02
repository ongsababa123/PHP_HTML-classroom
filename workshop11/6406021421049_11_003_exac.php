<?php 
    $homework = $_GET["homework"];
    $midturm = $_GET["Midturm"];
    $final = $_GET["final"];
    $score = $homework + $midturm + $final;
    echo "<b>ข้อมูลคะแนน</b><br>";
    echo "Home work : <i> $homework</i><br>";
    echo "Midturm : <i> $midturm</i><br>";
    echo "Final : <i> $final</i><br>";
    echo "Total score : <i> $score</i><br>";
    if($score >= 80 && $score <= 100){
        echo "Total result grade : <i> A </i><br>";
    }else if($score >= 75 && $score <= 79){
        echo "Total result grade : <i> B+ </i><br>";
    }else if($score >= 70 && $score <= 74){
        echo "Total result grade : <i> B </i><br>";
    }else if($score >= 65 && $score <= 69){
        echo "Total result grade : <i> C+ </i><br>";
    }else if($score >= 60 && $score <= 64){
        echo "Total result grade : <i> C </i><br>";
    }else if($score >= 55 && $score <= 59){
        echo "Total result grade : <i> D+ </i><br>";
    }else if($score >= 50 && $score <= 54){
        echo "Total result grade : <i> D </i><br>";
    }else{
        echo "Total result grade : <i> F </i><br>";
    }

?>
<br>
<a href="6406021421049_11_003_form.html">Back</a>
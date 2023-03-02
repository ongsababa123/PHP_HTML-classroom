<?php 
    $emp1 = $_POST["emp1"];
    $emp2 = $_POST["emp2"];
    $emp3 = $_POST["emp3"];
    $cost_emp1;
    $cost_emp2;
    $cost_emp3;

    echo "<b>พนักงานคนที่ 1</b> : ";
    $em1 = new cal_pay();
    echo $em1 -> cal($emp1)."<br>";
    echo "<b>พนักงานคนที่ 2</b> : ";
    $em2 = new cal_pay();
    echo $em2 -> cal($emp2)."<br>";
    echo "<b>พนักงานคนที่ 3</b> : ";
    $em3 = new cal_pay();
    echo $em3 -> cal($emp3);

    class cal_pay{
        private $cost;
        function cal(int $hrs){
            $remain;
            $remain1;
            if($hrs <= 8){
                $this -> cost = $hrs*50;
            }else if($hrs > 8 && $hrs <= 12){
                $remain = 12 - $hrs;
                $this -> cost = ($hrs*50)+($remain*20);
            }else if($hrs > 12 && $hrs <= 20){
                $remain = 12 - $hrs;
                $remain1 = 20 - $remain;
                $this -> cost = ($hrs*50)+($remain*20)+($remain1 * 10);
            }else{
                echo "<b>ต้องมีการสอบสวน</b>";
            }
            return $this -> cost;
        }
    }
?>
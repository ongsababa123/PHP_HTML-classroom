<?php
    class student
    {
        public $namestu;
        public $class;
        public $scorefinal;
        public $scorewidth;
        public $gardescore;
        
        function set_name($namestu){
            $this->namestu = $namestu;
        }
        function get_name(){
            return $this->namestu;
        }

        function set_class($class){
            $this->class = $class;
        }
        function get_class(){
            return $this->class;
        }

        function set_score($scorefinal){
            $this->scorefinal = $scorefinal;
        }
        function get_score(){
            return $this->scorefinal;
        }

        function set_width($scorewidth){
            $this->scorewidth = $scorewidth;
        }
        function get_width(){
            return $this->width;
        }

        function set_garde($scorefinal){
            $this->$scorefinal = $scorefinal;
            if ($scorefinal >= 80 && $scorefinal <= 100) {
                $this->gardescore = "A";
            }
            elseif ($scorefinal >= 70 && $scorefinal <= 79) {
                $this->gardescore = "B";
            }
            elseif ($scorefinal >= 60 && $scorefinal <= 69) {
                $this->gardescore = "C";
            }
            elseif ($scorefinal >= 50 && $scorefinal <= 59) {
                $this->gardescore = "D";
            }
            elseif ($scorefinal >= 0 && $scorefinal <= 49) {
                $this->gardescore = "F";
            }
            else {
                echo " error ";
            }
        }
        function get_garde(){
            return $this->gardescore;
        }

   }
    $name = new student();
    $name->set_name($_POST["name"]);

    $lern = new student();
    $lern->set_class($_POST["lern"]);

    $score = new student();
    $score->set_score($_POST["score"]);

    $width = new student();
    $width->set_width($_POST["width"]);

    $garde = new student();
    $garde->set_garde($score->get_score());

    echo "ชื่อ - นามสกุล : " . $name->get_name() . "<br>";
    echo "วิชา       : " . $lern->get_class(). "<br>";
    echo "คะแนนสอบ : " . $score->get_score(). "<br>";
    echo "เกรดที่ได้   : " . $garde->get_garde();
?>
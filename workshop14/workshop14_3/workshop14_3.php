<?php
    $salaries = array("nik" => 23500, "nid" => 18500, "zara" => 9500);
    list_data($salaries);
?>
    <hr>
<?php
    $salaries['nik'] = "high"; //change exist data
    $salaries['zaralek'] = "low"; //add new enmployee
    $salaries[] = "N/A";
    list_data($salaries);
?>
    <hr>
<?php
    function list_data($salaries)
    {
        foreach ($salaries as $key => $value) {
            echo "Salary of $key is " . $salaries[$key] . "<br>";
        }
    }
?>
<?php
$weekdays = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
$daycolor = array("red", "yellow", "pink", "green", "orange", "blue", "violet");
echo '<table border="1" align="center">';
echo '<tr><th bgcolor ="yellow" colspan="7">
<font size="4" color="blue">กุมภาพันธ์ ' . (date("Y") + 543) . '</font>';
echo '<font size="5" color="red"> ๒ </font>';
echo '<font size="4" color="blue">February ' . date("Y") . '</font></th></tr>';
echo '<tr>';
for ($n = 0; $n < 7; $n++) {
    echo '<td align="center" width="90" bgcolor="' . $daycolor[$n] . '">' . $weekdays[$n] . '</td>';
}
print_month();
echo '</tr></table>';
function print_month()
{
    $day = -2;
    for ($row = 1; $row <= 5; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= 7; $col++) {
            if (($day >= 1) && ($day <= 29))
                echo '<td align="center">' . $day . '</td>';
            else echo '<td align="center"> </td>';
            $day++;
        }
    }
}

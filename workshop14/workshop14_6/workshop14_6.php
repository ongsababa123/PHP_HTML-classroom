<?php
$maxRow = 10;
$maxCol = 3;
for ($r = 0; $r < $maxRow; $r++)
    for ($c = 0; $c < $maxCol; $c++)
        $score[$r][$c] = rand(0, 100);
?>
<table border='1' align='center' width='100%'>
    <tr>
        <td width='80' align='center'> Homework </td>
        <td width='80' align='center'> Midterm </td>
        <td width='80' align='center'> Final </td>
    </tr>
    <?php
    for ($r = 0; $r < $maxRow; $r++) {
        echo "<tr>";
        for ($c = 0; $c < $maxCol; $c++)
            echo "<td align='center'>" . $score[$r][$c] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
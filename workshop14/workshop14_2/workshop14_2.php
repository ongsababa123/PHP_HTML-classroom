<?php
$MaxStudent = 10;
for ($n = 0; $n < $MaxStudent; $n++) {
    $score[$n] = rand(0, 3);
}
?>
<center>
    <font size="4" color="blue"> Election Report </font>
</center>
<table align="center">
    <tr>
        <td>
            <table border="1" align="center">
                <tr>
                    <td align="center" width="90">Student No.</td>
                    <td align="center" width="90">Score</td>
                </tr>
                <?php
                for ($n = 0; $n < $MaxStudent; $n++) {
                    echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
                    echo '<td align="center" width="90">' . $score[$n] . '</td></tr>';
                }
                ?>
        </td>
    </tr>
</table>
</td>
<td>
    <table border='1' align='center'>
        <tr>
            <th colspan='2'>==Result==</th>
        </tr>
        <?php
        foreach (count_vote($score, $MaxStudent) as $key => $value) {
            echo "<tr><td>" . $key . "</td><th>" . $value . "</th></tr>";
        }
        ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
<?php
function count_vote($data, $max)
{
    $count = [0, 0, 0, 0];
    for ($n = 0; $n < $max; $n++) {
        $count[$data[$n]]++;
    }
    return ($count);
}
?>
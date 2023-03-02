<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<?php 
    $num = rand(999999,9999999);
    $tmp;
    $tmp1;
    for($i = $num;$i >= 1;$i--){
        $tmp = checkPrime($i);
        if(checkPrime($i)){
            $tmp1 = $tmp;
            break;
        }
    }
    echo "ค่าสูงสุดของจำนวนเฉพาะนี้คือ ".$tmp1;
    echo "<br><br>";

    echo "<table>";
    echo "
    <tr>
        <th>
            แม่สูตรคูณ
        </th>
        <th>
            ผลลัพธ์
        </th>
    </tr>";
    for ($i=1; $i <= 12 ; $i++) { 
        $result = $tmp1 * $i;
        echo "<tr>
            <td>
                $tmp1 * $i
            </td>
            <td>
            <p>$result</p>
        </td>
        </tr>";
    }
    echo "</table>";

    function checkPrime(int $num){
        $count = 0;
        for($i = $num;$i >= 1;$i--){
            if($num % $i == 0){
                $count++; 
            }
        }
        if($count == 2){
            return $num; 
        }
    }
?>

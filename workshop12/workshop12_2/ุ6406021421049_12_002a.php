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
    $num = $_POST['num'];
    $result;
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
        $result = $num * $i;
        echo "<tr>
            <td>
               $num * $i
            </td>
            <td>
            <p>$result</p>
        </td>
        </tr>";
    }
    echo "</table>";
?>
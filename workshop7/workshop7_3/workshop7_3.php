<?php
echo "ตารางเกรดนักศึกษา";	// PHP

?>


<?php 

echo '
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 8px;

}
</style>
<table style="width:50%; text-align: left;">
  <tr bgcolor="#999999">
    <th>ลำดับ</th>
    <th colspan="2">ชื่อ-นามสกุล</th>
    <th colspan="2">คะแนนที่ได้</th>
  </tr>
  <tr>
    <td>1</td>
    <td>อนุรักษ์</td>
    <td>เรียนดี</td>
    <td>80</td>
    <td>A</td>
  </tr>
  <tr bgcolor="#e5e5e5">
    <td>2</td>
    <td>สมฤดี</td>
    <td>สุขสันต์</td>
    <td>55</td>
    <td>D+</td>
  </tr>
  <tr>
    <td>3</td>
    <td>เลิศชัย</td>
    <td>เก่งกาจ</td>
    <td>66</td>
    <td>C+</td>
  </tr>
</table>';
?>
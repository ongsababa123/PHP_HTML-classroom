<pre>
<?php
require_once 'DBHelper.php';
class Employee extends DBHelper{

    public function create_table(){
   
        }

    public function Insert_Emp_data(){

    }

    public function Update_Emp_data(){

    }

    public function DeleteEmployeeByID(){

    }

    public function ShowEmployeeByID(){
        $sql = "SELECT * FROM table_employee";
        $result = $this->$conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo "<table border = 1>";
        foreach ($data as $value){
            echo "<tr>".
            "<td>".$value['emp_code ']. "</td>".
            "<td>".$value['emp_name']. "</td>".
            "<td>". $value['birthyear']. "</td>".
            "<td>".$value['salary']. "</td>".
            "<td>".$value['create_date']. "</td>".
            "<tr>";
            }
            echo "</table>";
    }
}
?>
</pre>
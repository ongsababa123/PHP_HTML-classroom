<?php
  require_once 'class.db.php';
  class insertTosql extends database{
public function add_data($decoded){
      $sql = "INSERT INTO `data`(`equipment_name`, `sensor_name`, `location`, `Temperature`, `Humidity`, `Pressure`) 
      VALUES (:name_equipemnt,:name_sensor,:name_location,:temp,:humidity,:pressure)";
      // $sql = "INSERT INTO `data`(`equipment_name`, `sensor_name`, `location`, `Temperature`, `Humidity`, `Pressure`) 
      // VALUES ('esp','tmp','prachiburi','1','2','3')";
     echo $sql;
     $response= array();
      try{
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($decoded);
        // $stmt->execute();
        $response["status"] = true;
      }catch(PDOException $e){
        $response["status"] = false;
        $response["message"] = $e;
        $response["debug"] = $sql;
      }
      echo json_encode($response);
    }
}

// $test = new insertTosql();
// $decoded = [':name_equipemnt' => 'esp',':name_sensor' => 'tmp',':name_location' => 'prachiburi',':temp' => 1,':humidity' => 2,':pressure' => 3];
// // $data = json_encode($decoded);
// $test->add_data($decoded);
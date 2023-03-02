<?php 
    require_once 'class.db.php';
    class insertTosql extends database{
        public function add_data($data){
            $sql = "INSERT INTO `recorddata`(`sensor_name`, `location`, `temperator`, `humidity`, `pressure`) 
            VALUES (:sensor_name, :locationName,
               :temp, :humi, :pressure)";
            $response= array();
            try{
              $stmt = $this->conn->prepare($sql);
              $stmt->execute($data);
              $response["status"] = true;
            }catch(PDOException $e){
              $response["status"] = false;
              $response["message"] = $e;
              $response["debug"] = $sql;
            }
            echo json_encode($response);
          }
    }
?>
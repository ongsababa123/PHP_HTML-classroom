<?php
  require_once 'class.db.php';
  class customer extends database{
    function selectAll(){
      $sql = "SELECT * FROM customers";
      $statement = $this->conn->query($sql);
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      if(count($result)){
        $response = array("status"=>true,"response"=>$result);
      }else{
        $response = array("status"=>false,"response"=>"N/A");
      }
      echo json_encode($response);
    }

    function selectPage($page, $perpage=5){
      $start = ($page-1) * $perpage;
      $sql = "SELECT * FROM customers limit {$start}, {$perpage}";
      $statement = $this->conn->query($sql);
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      if(count($result)){
        $response = array("status"=>true,"response"=>$result);
      }else{
        $response = array("status"=>false,"response"=>"N/A");
      }
      echo json_encode($response);
    }

    public function count(){
      $sql = "SELECT CustomerID FROM customers";
      $statement = $this->conn->query($sql);
      $row = $statement->rowCount();
      return $row;
    }

    public function add_customer($data){
      $sql = "INSERT INTO `customers`(`CustomerName`, `ContactName`,`Address`,
               `City`, `PostalCode`, `Country`)
               VALUES (:CustomerName, :ContactName, :Address,
               :City, :PostalCode, :Country)";
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

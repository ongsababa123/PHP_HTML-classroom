<?php
    
  class ShoppingCart{
   
    public function addItem($name, $item){
        $chk = 0; //สร้างตัวแปรสำหรับเช็คว่าสินค้าซ้ำหรือไม่
          foreach($_SESSION['SS_PID'] as $k => $v){
          if($v==$_POST['pid']){ //เช็ครหัสสินค้าว่ามีหรือไม่ ถ้ามีจะให้ $chk = 1 เพื่อบอกว่าสินค้าซ้ำ
        $chk = 1;
        }
    }
  }

    public function clear(){
      session_destroy();
    }
  }
 
?>
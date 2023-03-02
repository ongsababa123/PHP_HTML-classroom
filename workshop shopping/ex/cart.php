<?php
    class ShoppingCart{
        private $name;
        private $items;

        public function ShoppingCart($inputName=''){
            $this->name = $inputName;
        }
        public function addItem($artnr, $num){
            if(isset($this->items[$artnr])){
                if($num > 0){
                    $this->items[$artnr] += $num;
                }else{
                    echo "Error: aty not correct  $num <br>";
                }
            }else{
                $this->items[$artnr] = $num;
            }
        }
        public function removeItem($artnr, $num){
            if($this->items[$artnr] > $$num){
                $this->items[$artnr] -= $num;
                return true;
            }elseif($this->items[$artnr] == $num){
                unset($this->items[$artnr]);
                return true;
            }else{
                return false;
            }
        }
    }
?>
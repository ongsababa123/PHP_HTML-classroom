<?php
class member{

  public $_id;
  public $name = 'unknow';
  private $balance = 0;
  private $status = 0;

  
  
  function __construct($name, $balance)
  {
    $this->_id = rand(0, 99999999);
    $this->name = $name;
    $this->balance = $balance;
  }


  function active()
  {
    if ($this->status == 0) {
      $this->status = 1;
    } elseif ($this->status == 1) {
      echo "Your Account already activated.";
    }
  }


  function deactive()
  {
    if ($this->status == 1) {
      $this->status = 0;
    } elseif ($this->status == 0) {
      echo "Your Account already activated.";
    }
  }


  function deposit($balance)
  {
    if ($this->status == 1) {
      $this->balance += $balance;
    } elseif ($this->status == 0) {
      echo "Deposit Error: account must Activate before use";
    }
  }

  function withdraw($balance, $amount)
  {
    if ($this->status == 1) {
      if ($balance >= $amount) {
        $balance = $balance - $amount;
      } else {
        echo "transaction Error your balance not enough";
      }
    } else {
      echo "Withdraw Error: account must Activate before us";
    }
  }
}



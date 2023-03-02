<?php
session_start();
class member {
    public $_id;
    public $name;
    private $balance;
    private $status;

    public function __construct($name = 'unknown', $balance = 0) {
        $this->_id = rand($min = 0, $max = 99999999);
        $this->name = $name;
        $this->balance = $balance;
        $this->status = 0;

        $_SESSION['member']['_id'] = $this->_id;
        $_SESSION['member']['name'] = $this->name;
        $_SESSION['member']['balance'] = $this->balance;
        $_SESSION['member']['status'] = $this->status;
    }

    public function active() {

        if ($_SESSION['member']['status'] == 0) {
            $_SESSION['member']['status'] = 1;
        } else {
            echo "Your Account already activated.";
        }
    }

    public function deactive() {

        if ($this->status == 1) {
            $this->status = 0;
        } else {
            echo "Your Account already deactivated.";
        }
    }
    public function deposit($amount) {

        if ($_SESSION['member']['status'] == 1) {
            $_SESSION['member']['balance'] += $amount;
        } else {
            echo "Deposit Error: account must Activate before use";
        }
    }
    public function withdraw($amount) {
        if ($_SESSION['member']['status'] == 1) {
            if ($_SESSION['member']['balance'] >= $amount) {
                $_SESSION['member']['balance'] -= $amount;
            } else {
                echo "“transaction Error your balance not enough";
            }
        } else {
            echo "Withdraw Error: account must Activate before use";
        }
    }
    public function get_balance() {

        echo "balance : " . $this->balance;
    }
}

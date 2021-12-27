<?php

    class Account {
        public $name;
        public $balance;
        public $accNum;

        public function __construct($name, $balance, $accNum) {
            $this->name = $name;
            $this->balance = $balance;
            $this->accNum = $accNum;
        }

        // show balance
        public function showBal() {
            return $this->balance;
        }

        public function showPIN() {
            return $this->accNum;
        }

        // withdraw
        public function withdraw($amount) {
            if($this->balance > 0) {
                if($amount <= $this->balance) {
                    $this->balance -= $amount;
                    echo "You have Succesfully Withdrawn!<br><br>";
                    echo "You current balance is : <b>₱ " ;
                } else {
                    echo "Error: Insufficient funds";
                    echo "<br>";
                    echo "You current balance is : <b>₱ " ;
                  
                }
            } else {
                echo "Error: Insufficient funds";
                echo "<br>";
                echo "You current balance is : <b>₱";
            
            }
        }

        public function deposit($amount) {
            $this->balance += $amount;
        }

    } 

    // accounts
    $person1 = new Account("RA", 200, 1234);
    $person2 = new Account("Kim", 1000, 6789);

?>
<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function __toString() {
        return "Account Number: " . $this->accountNumber . ", Balance: $" . $this->balance;
    }
}
?>
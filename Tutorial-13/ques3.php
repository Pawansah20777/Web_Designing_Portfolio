<?php
class BankAccount {
  private $balance,$interestRate;


  public function __construct($balance, $interestRate) {
    $this->balance = $balance;
    $this->interestRate = $interestRate;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function withdraw($amount) {
    if ($amount > $this->balance) {
      throw new Exception("Insufficient balance.");
    }
    $this->balance -= $amount;
  }

  public function addInterest() {
    $interest = $this->balance * $this->interestRate / 100;
    $this->balance += $interest;
  }

  public function getBalance() {
    return $this->balance;
  }
}
// Create a BankAccount object with a balance of 1000 and interest rate of 5%
$account = new BankAccount(1000, 5);

// Deposit 500
$account->deposit(500);

// Withdraw 200
$account->withdraw(200);

// Add interest
$account->addInterest();

// Print the balance
echo "Balance: " . $account->getBalance();
?>
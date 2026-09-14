<?php 
class BankAccount {
    private float $balance = 0;


    public function deposit(float $amount): void {
        if ($amount <= 0) {
            echo "Deposit amount must be greater than zero.";
            exit;
        }

        $this->balance += $amount;

    }


    public function withdraw(float $amount): void {

        if ($amount <= 0 ) {
            echo "Withdraw amount must be greater than zero.";
            exit;
        }

        if ($amount > $this->balance) {
            echo "Insufficient balance. Your current balance is {$this->balance}.";
            exit;
        }

        $this->balance -= $amount;

    }

    public function getBalance(): float {
        return $this->balance;
    }


}





$account = new BankAccount();

// Deposit money
$account->deposit(1000);
echo "Deposited: 1000 </br>";



class Product {
    private float $price;

    public function __construct(float $price) {
        $this->setPrice($price);

    }


    public function setPrice(float $price): void {
        if ($price < 0) {
            throw new InvalidArgumentException("Price cannot be negative.");
        }
        $this->price = $price;
    }

    public function getPrice(): float {
        return $this->price;
    }

}




$product = new Product(1200);

echo "Product Price: " . $product->getPrice() . "</br>";


































<?php 
/**
 * Access Modifiers -> Control who can access properties and methods 
 * in a class
 * There are Three access modifiers in PHP:
 * 1. Public   2. Private    3. Protected
 */

class AccountHolder {
    /** Properties  */
    public string $name;
    public string $email;
    protected int $phone;
    private float $balance = 0;

    public function __construct(string $name, string $email, int $phone)
    {   
        $this->name = $name;
        $this->email = $email;
        /** 
         * Can not access outside of class. 
         * Only allow to access same class and child classes. 
         * 
         */
        return $this->phone = $phone; 
    }

    public function accoundHolderInfo() {
        return $this->phone;
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

}

/** Input Data */
$name = "Ahmed Hussain";
$email = "hussain@gmail.com";
$phone = 0150134553;

$accountHolder = new AccountHolder($name, $email, $phone);

$accountHolder->deposit(500);




























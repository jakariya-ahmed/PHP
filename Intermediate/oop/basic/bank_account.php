<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class BankAccount {
    /** Private Property */
    private float $balance = 0;

    /** Desposit Amount */
    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    /**
     * Withdraw Amount
     */
    public function withdraw(float $amount): void {
        /** 
         * Check $amount > 0 
         * check $amount <= Current Balance
         */
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    /** Check Balance */
    public function checkBalance(): float {
        return $this->balance;
    }


    



}   

/** Create Object for Bank Account */
    $account = new BankAccount();


    $account->deposit(700);
    $account->deposit(500);
    $account->withdraw(200);

/**
 * Static Properties and Static Methods
 * 
 */

class User {
    public static int $count = 0;
}

User::$count++;
User::$count++;

class Employee {
    // Initialize static property
    public static int $totalEmployees = 0;

    public function __construct()
    {
        self::$totalEmployees++;
    }
}


new Employee();
new Employee();
new Employee();

/**
 * Static const
 */

class App {
    
    public const VERSION = "1.0.0";

    public const APP_NAME = "Employee Management";
    
}

Class RolePermission {
    public const ROLE = "Admin";
}

// echo App::APP_NAME;
// echo App::VERSION;



/** Utility Methods in Static */
class Math {
    public static function add(int $a, int $b): int {
        return $a + $b;
    }

}



echo Math::add(20, 30);



















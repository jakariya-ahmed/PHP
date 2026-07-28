<?php
/** Interface Class  */
interface Payment {
    public function pay(float $amount): void;
}


/** Implement Interface Class */
class BkashPayment implements Payment {
    /** Implement Interface method */
    public function pay(float $amount):void {
        echo "Your Payment {$amount} Pai by Bkash</br>";
    }
}

/** Implement Interface for Nogod  */
class NogodPayment implements Payment {
    /** Implement Interface Method */
    public function pay(float $amount): void {
        echo "Your Payment {$amount} Paid by Nogod</br>";
    }

}   

/** Implement Interface for Stripe Payment */
class StripePayment implements Payment {
    /** Implement Interface Method */
    public function pay(float $amount): void {
        echo "Your Payment {$amount} Paid by Stripe</br>";
    }
}


$bkashPay = new BkashPayment();
$NogodPay = new NogodPayment();
$stripePay = new StripePayment();

$bkashPay->pay(500);
$NogodPay->pay(200);
$stripePay->pay(400);









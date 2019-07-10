<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../helpers.php';

use Exception;
use Error;
use DesignPatterns\Behavioral\Strategy\{ 
    Payment,
    CreditCard,
    Boleto,
    Paypal,
    Input
};
// Payment for credit card
$installment = 5;
$creditCardTotalAmount = (
    new Payment(
        new CreditCard(
            new Input([
                'amount' => 150,
                'installment' => $installment
            ])
        )
    )
)->calculate();

// Payment to Boleto
$boletoTotalAmount = (
    new Payment(
        new Boleto(
            new Input([
                'amount' => 150
            ])
        )
    )
)->calculate();

// Payment to Paypal
$paypalTotalAmount = (
    new Payment(
        new Paypal(
            new Input([
                'amount' => 150
            ])
        )
    )
)->calculate();

echo 'Amount for Credit Card is: ' . toMoney($creditCardTotalAmount) . ' in ' . $installment . "x<br>";
echo 'Amount for Boleto is: ' . toMoney($boletoTotalAmount) . "<br>";
echo 'Amount for Paypal is: ' . toMoney($paypalTotalAmount) . "<br>";


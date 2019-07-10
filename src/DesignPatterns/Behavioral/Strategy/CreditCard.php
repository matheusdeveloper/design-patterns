<?php

namespace DesignPatterns\Behavioral\Strategy;

class CreditCard implements PaymentMethodInterface
{
    /**
     * @var array
    */
    private static $taxes = [
        1 => 0,
        2 => 0,
        3 => 0.3,
        4 => 0.4,
        5 => 0.5,
        6 => 0.6,
        7 => 0.7,
        8 => 0.8,
        9 => 0.9
    ];

    public function __construct(InputInterface $input)
    {
        $this->input = $input;
    }

    public function calculate(): float
    {
        return $this->input->amount + ($this->input->amount * (self::$taxes[$this->input->installment]));
    }
}
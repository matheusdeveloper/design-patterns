<?php

namespace DesignPatterns\Behavioral\Strategy;

class Boleto implements PaymentMethodInterface
{
    /**
     * discount percentage
     * @var float
    */
    protected static $discount = 10;
    
    public function __construct(InputInterface $input)
    {
        $this->input = $input;
    }
    
    public function calculate(): float
    {
        return $this->input->amount - ($this->input->amount * self::$discount / 100);
    }
}
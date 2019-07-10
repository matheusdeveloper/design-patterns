<?php

namespace DesignPatterns\Behavioral\Strategy;

class Paypal implements PaymentMethodInterface
{
    public function __construct(InputInterface $input)
    {
        $this->input = $input;
    }
    
    public function calculate(): float
    {
        return $this->input->amount;
    }
}
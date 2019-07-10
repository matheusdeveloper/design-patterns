<?php

namespace DesignPatterns\Behavioral\Strategy;

class Input implements InputInterface
{
    public $amount;

    public $installment = 1;

    public function __construct(array $array)
    {
        foreach ($array as $prop => $value) {
            if (property_exists($this, $prop)) {
                $this->{$prop} = $value;
            }
        }
    } 
}
<?php

namespace DesignPatterns\Behavioral\Strategy;

class Payment
{
	/**
	* @var PaymentMethodInterface
	*/
	protected $paymentMethod;

	public function __construct(PaymentMethodInterface $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}

	public function calculate(): float
	{
		return $this->paymentMethod->calculate();
	}
}
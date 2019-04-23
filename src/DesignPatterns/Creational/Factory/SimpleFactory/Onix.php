<?php


namespace DesignPatterns\Creational\Factory\SimpleFactory;


class Onix implements AutomobileInterface
{
    /**
     * @var string
     */
    public $name = 'Onix';

    /**
     * @var string
     */
    public $brand = 'Chevrolet';

    /**
     * @return string
     */
    public function run()
    {
        return $this->name . ' andando';
    }
}
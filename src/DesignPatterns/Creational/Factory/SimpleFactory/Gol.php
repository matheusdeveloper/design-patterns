<?php


namespace DesignPatterns\Creational\Factory\SimpleFactory;


class Gol implements AutomobileInterface
{
    /**
     * @var string
     */
    public $name = 'Gol';

    /**
     * @var string
     */
    public $brand = 'VV';

    /**
     * @return string
     */
    public function run()
    {
        return $this->name . ' andando';
    }
}
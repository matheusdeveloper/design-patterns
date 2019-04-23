<?php


namespace DesignPatterns\Creational\Factory\SimpleFactory;


class HBTwenty implements AutomobileInterface
{
    /**
     * @var string
     */
    public $name = 'HB20';

    /**
     * @var string
     */
    public $brand = 'Hyunday';

    /**
     * @return string
     */
    public function run()
    {
        return $this->name . ' andando';
    }
}
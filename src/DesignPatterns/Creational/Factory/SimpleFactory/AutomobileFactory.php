<?php


namespace DesignPatterns\Creational\Factory\SimpleFactory;


class AutomobileFactory
{
    /**
     * @param string $type
     * @return AutomobileInterface
     * @throws \Exception
     */
    public static function create(string $type): AutomobileInterface
    {
        $class = __NAMESPACE__ . '\\' . ucfirst($type);

        if (empty($type) || !class_exists($class)) {
            throw new \Exception('Car brand dont exist or invalid.', 400);
        }

        return new $class;
    }
}
<?php

require_once ('class\fruit\Fruit.php');

//namespace Garden\Class\Fruit;
//use Garden\Class\Fruit\Fruit;

//класс Pear наследует класс Fruit фрукты
class Pear extends Fruit
{

    /**
     * Pear constructor.
     */
    public function __construct()
    {
        $this->weight = rand(130, 170);
    }
}
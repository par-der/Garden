<?php

require_once ('class\fruit\Fruit.php');

//namespace Garden\Class\Fruit;
//use Garden\Class\Fruit\Fruit;

//класс Apple наследует класс Fruit
class Apple extends Fruit
{
    /**
     * Apple constructor.
     */
    public function __construct()
    {
        $this->weight = rand(150, 180);
    }
}
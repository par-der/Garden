<?php

//namespace Garden\Class\Fruit;

//дочерний класс Fruit для фруктов
class Fruit
{
    /**
     * @var int
     */
    protected int $weight;

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }
}
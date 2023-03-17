<?php

require_once ('class\fruit\Pear.php');

//namespace Garden\Class\Tree;
//use Garden\Class\Fruit\Pear;

//класс Peartree наследует Tree дерево
class Peartree extends Tree {

    /**
     * Peartree constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->countFruit = rand(0, 20);
    }

    /**
     * @return array
     */
    public function getFruits(): array
    {
        $pears = array();
        for($i = 1; $i <= $this->countFruit; $i++){
            $pear = new Pear();
            $pears[] = $pear;
        }
        return $pears;
    }
}
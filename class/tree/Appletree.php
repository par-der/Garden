<?php

require_once ('class\tree\Tree.php');

//namespace Garden\Class\Tree;
//use Garden\Class\Fruit\Apple;

//класс Appletree наследует Tree дерево
class Appletree extends Tree {

    /**
     * Appletree constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->countFruit = rand(40, 50);
    }

    /**
     * @return array
     */
    public function getFruits(): array
    {
        $apples = array();
        for($i = 1; $i <= $this->countFruit; $i++){
            $apple = new Apple();
            $apples[] = $apple;
        }
        return $apples;
    }
}
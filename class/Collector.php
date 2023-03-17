<?php

require_once ('class\tree\Tree.php');
require_once ('class\tree\Appletree.php');
require_once ('class\tree\Peartree.php');
require_once ('class\fruit\Apple.php');
require_once ('class\fruit\Fruit.php');
require_once ('class\fruit\Pear.php');

//namespace Garden\Class;
//use Garden\Class\Tree;
//use Garden\Class\Fruit;

//класс Collector в котором записываются данные и передаются в main.php статической функцией execute
class Collector
{
    /**
     * @param int $treeCount
     * @return array
     */
    private static function plantAppletree(int $treeCount = 10): array
    {
        $trees = array();
        for($i = 1; $i <= $treeCount; $i++){
            $tree = new Appletree();
            $trees[] = $tree;
        }
        return $trees;
    }

    /**
     * @param int $treeCount
     * @return array
     */
    private static function plantPeartree(int $treeCount = 15): array
    {
        $trees = array();
        for($i = 1; $i <= $treeCount; $i++){
            $tree = new Peartree();
            $trees[] = $tree;
        }
        return $trees;
    }

    /**
     * @param array $trees
     * @return int
     */
    private static function getFruitsCount(array $trees): int
    {
        $count = 0;
        foreach ($trees as $tree){
            $fruits = $tree->getFruits();
            $count += count($fruits);
        }
        return $count;
    }

    /**
     * @param array $trees
     * @return int
     */
    private static function getFruitsWeight(array $trees): int
    {
        $result = 0;
        foreach ($trees as $tree){
            $fruits = $tree->getFruits();
            foreach ($fruits as $fruit){
                $result += $fruit->getWeight();
            }
        }
        return $result;
    }

    /**
     *
     */
    public static function execute(): void
    {
        $apples = self::plantAppletree();
        $pears = self::plantPeartree();

        $applesCount = self::getFruitsCount($apples);
        $pearsCount = self::getFruitsCount($pears);

        $applesWeight = self::getFruitsWeight($apples);
        $pearsWeight = self::getFruitsWeight($pears);

        print_r('Количество яблок: ' . $applesCount . ', их общий вес: ' . $applesWeight . ' гр.' . PHP_EOL);
        print_r('Количество груш: ' . $pearsCount . ', их общий вес: ' . $pearsWeight . ' гр.');
    }
}

<?php

require_once('class\Collector.php');
require_once('class\tree\Appletree.php');
require_once('class\tree\Peartree.php');
require_once('class\fruit\Apple.php');
require_once('class\fruit\Pear.php');

class GardenTest extends \PHPUnit\Framework\TestCase
{
//    /**
//     * @test
//     * делал проверку меняя модификаторы доступа
//     */
//    public function plantAppletreeTest()
//    {
//        $treeCount = new Collector;
//        $result = count($treeCount->plantAppletree());
//        $this->assertEquals(10, $result);
//    }
//
//    /**
//     * @test
//     * делал проверку меняя модификаторы доступа
//     */
//    public function plantPeartreeTest()
//    {
//        $treeCount = new Collector;
//        $result = count($treeCount->plantPeartree());
//        $this->assertEquals(15, $result);
//    }

    /**
     * @test
     */
    public function countAppleFruitTest()
    {
        $countFruit = new Appletree();
        $result = $countFruit->getCountFruit();
        $this->assertTrue(40 <= $result);
        $this->assertTrue($result <= 50);
    }

    /**
     * @test
     */
    public function appleCountFruit()
    {
        $countFruit = new Peartree();
        $result = $countFruit->getCountFruit();
        $this->assertTrue(0 <= $result);
        $this->assertTrue($result <= 20);
    }

    /**
     * @test
     */
    public function appleWeightTest()
    {
        $weight = new Apple();
        $result = $weight->getWeight();
        $this->assertTrue(150 <= $result);
        $this->assertTrue($result <= 180);
    }

    /**
     * @test
     */
    public function pearWeightTest()
    {
        $weight = new Pear();
        $result = $weight->getWeight();
        $this->assertTrue(130 <= $result);
        $this->assertTrue($result <= 170);
    }
}
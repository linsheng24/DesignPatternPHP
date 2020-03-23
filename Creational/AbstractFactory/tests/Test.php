<?php

namespace DesignPattern\Creational\AbstractFactory\tests;

use DesignPattern\Creational\AbstractFactory\AProduct;
use DesignPattern\Creational\AbstractFactory\BProduct;
use DesignPattern\Creational\AbstractFactory\ProductFactory;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function test_CanCreateProductA()
    {
        $factory = new ProductFactory();
        $product = $factory->createA(150);

        $this->assertInstanceOf(AProduct::class, $product);
    }

    public function test_CanCreateProductB()
    {
        $factory = new ProductFactory();
        $product = $factory->createB(150);

        $this->assertInstanceOf(BProduct::class, $product);
    }

    public function test_CanProductACalculate()
    {
        $factory = new ProductFactory();
        $product = $factory->createA(150);

        $this->assertEquals(150, $product->calculatePrice());
    }

    public function test_CanProductBCalculate()
    {
        $factory = new ProductFactory();
        $product = $factory->createB(150);

        $this->assertEquals(200, $product->calculatePrice());
    }

}

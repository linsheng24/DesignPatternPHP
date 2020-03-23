<?php


namespace DesignPattern\Creational\AbstractFactory;


class ProductFactory
{

    const SHIPPING_PRICE = 50;

    public function createA($price): Product
    {
        return new AProduct($price);
    }

    public function createB($price): Product
    {
        return new BProduct($price, self::SHIPPING_PRICE);
    }

}
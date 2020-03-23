<?php


namespace DesignPattern\Creational\AbstractFactory;


class AProduct implements Product
{

    /**
     * @var
     */
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }


    public function calculatePrice(): int
    {
        return $this->price;
    }
}
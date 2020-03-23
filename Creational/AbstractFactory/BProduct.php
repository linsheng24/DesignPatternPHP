<?php


namespace DesignPattern\Creational\AbstractFactory;


class BProduct implements Product
{
    /**
     * @var
     */
    private $productPrice;

    /**
     * @var
     */
    private $shippingPrice;

    public function __construct($productPrice, $shippingPrice)
    {
        $this->productPrice = $productPrice;
        $this->shippingPrice = $shippingPrice;
    }

    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingPrice;
    }
}
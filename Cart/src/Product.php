<?php namespace Fruit;

class Product
{

    private $name;
    private $price;
    protected $tva = 0.2;


    public function __construct(string $name, float $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name):void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice():float
    {
        return $this->price;
    }

    /**
     *
     */
    public function getTVA()
    {
        return $this->tva;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }


}

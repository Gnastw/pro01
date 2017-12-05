<?php namespace Fruit;

class Cart
{
    /**
     * @var array
     */
    private $storage = null;

    public function __construct(iStorage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param Product $product
     * @param $quantity
     * @return $this
     */
    public function buy(Product $product, int $quantity)
    {
        $quantity = $quantity;

        $this->storage->setValue($product->getName(), (float) $product->getPrice() * $quantity );

        return $this; // retourne l'objet dans le script courant pour chaîner les méthodes
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function restore(Product $product)
    {
        $this->storage->restore($product->getName());

        return $this;
    }

    /**
     * sum cart product
     * @return number
     */
    public function total()
    {
        return $this->storage->total();
    }

    /**
     * reset cart
     */
    public function reset()
    {
        $this->storage->reset();
    }


}

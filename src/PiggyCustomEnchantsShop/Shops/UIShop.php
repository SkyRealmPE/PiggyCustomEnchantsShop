<?php

namespace PiggyCustomEnchantsShop\Shops;

/**
 * Class UIShop
 * @package PiggyCustomEnchantsShop\Shops
 */
class UIShop extends Shop
{
    private $id;

    /**
     * SignShop constructor.
     * @param string $enchantment
     * @param int $enchantLevel
     * @param int $price
     * @param int $id
     */
    public function __construct(string $enchantment, int $enchantLevel, int $price, int $id)
    {
        parent::__construct($enchantment, $enchantLevel, $price);
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
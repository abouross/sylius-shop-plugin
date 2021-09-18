<?php


namespace Tests\Aboudev\SyliusShopPlugin\Application\Entity;

use Aboudev\SyliusShopPlugin\Entity\Shop as BaseShop;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Shop
 * @package Tests\Aboudev\SyliusShopPlugin\Application\Entity
 * @ORM\Entity
 * @ORM\Table(name="aboudev__shop")
 */
class Shop extends BaseShop
{

}

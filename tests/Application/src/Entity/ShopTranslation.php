<?php


namespace Tests\Aboudev\SyliusShopPlugin\Application\Entity;

use Aboudev\SyliusShopPlugin\Entity\ShopTranslation as ShopTranslationBase;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ShopTranslation
 * @package Tests\Aboudev\SyliusShopPlugin\Application\Entity
 * @ORM\Entity
 * @ORM\Table(name="aboudev__shop_translation")
 */
class ShopTranslation extends ShopTranslationBase
{

}

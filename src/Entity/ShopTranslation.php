<?php


namespace Aboudev\SyliusShopPlugin\Entity;


use Aboudev\SyliusShopPlugin\Model\ShopTranslationInterface;
use Sylius\Component\Resource\Model\AbstractTranslation;

class ShopTranslation extends AbstractTranslation implements ShopTranslationInterface
{
    private $id;
    private $name;
    private $slug;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
}

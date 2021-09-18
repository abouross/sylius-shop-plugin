<?php


namespace Aboudev\SyliusShopPlugin\Entity;


use Aboudev\SyliusShopPlugin\Model\ShopInterface;
use Sylius\Component\Core\Model\ShopUserInterface;
use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;

class Shop implements ShopInterface
{
    use TimestampableTrait;
    use TranslatableTrait {
        __construct as protected initializeTranslationsCollection;
    }

    private $id;
    private $owner;

    /**
     * Shop constructor.
     */
    public function __construct()
    {
        $this->initializeTranslationsCollection();
    }


    /** @psalm-suppress MissingReturnType */
    public function getId()
    {
        return $this->id;
    }

    public function getOwner(): ?ShopUserInterface
    {
        return $this->owner;
    }

    public function setOwner(?ShopUserInterface $user): void
    {
        $this->owner = $user;
    }

    public function getName(): ?string
    {
        return $this->getTranslation()->getName();
    }

    public function setName(?string $name): void
    {
        $this->getTranslation()->setName($name);
    }

    public function getSlug(): ?string
    {
        return $this->getTranslation()->getSlug();
    }

    public function setSlug(?string $slug): void
    {
        $this->getTranslation()->setSlug($slug);
    }

    /**
     * Create resource translation model.
     */
    protected function createTranslation(): ShopTranslation
    {
        return new ShopTranslation();
    }
}

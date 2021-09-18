<?php


namespace Aboudev\SyliusShopPlugin\Model;


use Sylius\Component\Core\Model\ShopUserInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface ShopInterface extends TranslatableInterface, ResourceInterface, TimestampableInterface
{
    public function getOwner(): ?ShopUserInterface;

    public function setOwner(?ShopUserInterface $user): void;
}

<?php


namespace Aboudev\SyliusShopPlugin\Model;


interface ShopTranslationInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;

    public function getSlug(): ?string;

    public function setSlug(?string $slug): void;
}

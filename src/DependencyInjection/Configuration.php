<?php

declare(strict_types=1);

namespace Aboudev\SyliusShopPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('aboudev_sylius_shop_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}

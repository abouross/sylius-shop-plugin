<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Shop plugin</h1>

<p align="center">Plugin allow you to manage shops and there owners.</p>

## Installation

1. Run `composer require aboudev/sylius-shop-plugin` and, when asked if you want to execute the Flex recipe, answer 'Yes'.
2. Extend config files:
    1. Add AboudevSyliusShopPlugin to `config/bundles.php`.
    ```php
    // config/bundles.php
    
        return [
            Aboudev\SyliusShopPlugin\AboudevSyliusShopPlugin::class => ['all' => true],
        ];
    ```
<?php

declare(strict_types=1);

/**
 * Menu Navbar Module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-menu-navbar
 * @package   Mailery\Menu\Navbar
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Menu\Menu;
use Mailery\Menu\Navbar\NavbarMenuInterface;
use Mailery\Menu\Decorator\Normalizer;
use Mailery\Menu\Decorator\Instantiator;
use Mailery\Menu\Decorator\Sorter;
use Yiisoft\Injector\Injector;

return [
    NavbarMenuInterface::class => static function (Injector $injector) use($params) {
        return (new Menu($params['maileryio/mailery-menu-navbar']['items']))
            ->withSorter(new Sorter())
            ->withNormalizer(new Normalizer($injector))
            ->withInstantiator(new Instantiator());
    },
];

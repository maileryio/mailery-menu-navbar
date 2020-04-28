<?php

declare(strict_types=1);

/**
 * Menu Navbar Module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-menu-navbar
 * @package   Mailery\Menu\Navbar
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

namespace Mailery\Menu\Navbar;

use Psr\Container\ContainerInterface;

class NavbarMenuFactory
{
    /**
     * @var array
     */
    private array $items;

    /**
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @param ContainerInterface $container
     * @return NavbarMenuInterface
     */
    public function __invoke(ContainerInterface $container): NavbarMenuInterface
    {
        $navbarMenu = new NavbarMenu($container);
        $navbarMenu->setItems($this->items);

        return $navbarMenu;
    }
}

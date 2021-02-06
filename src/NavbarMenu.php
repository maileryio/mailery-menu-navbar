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

use Mailery\Menu\MenuInterface;

class NavbarMenu implements MenuInterface
{
    /**
     * @var MenuInterface
     */
    private MenuInterface $menu;

    /**
     * @param MenuInterface $menu
     */
    public function __construct(MenuInterface $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->menu->getItems();
    }
}

<?php

declare(strict_types=1);

/**
 * Menu Navbar Module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-menu-navbar
 * @package   Mailery\Menu\Navbar
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Menu\Navbar\NavbarMenu;
use Mailery\Menu\Navbar\NavbarMenuInterface;

return [
    NavbarMenuInterface::class => [
        '__class' => NavbarMenu::class,
    ],
];

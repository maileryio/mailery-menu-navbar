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

use Mailery\Menu\Navbar\NavbarMenu;
use Yiisoft\Yii\View\CommonParametersInjectionInterface;

class NavbarViewInjection implements CommonParametersInjectionInterface
{
    /**
     * @param NavbarMenu $navbarMenu
     */
    public function __construct(
        private NavbarMenu $navbarMenu
    ) {}

    /**
     * @return array
     */
    public function getCommonParameters(): array
    {
        return [
            'navbarMenu' => $this->navbarMenu,
        ];
    }
}

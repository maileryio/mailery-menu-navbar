<?php

declare(strict_types=1);

use Mailery\Menu\Navbar\NavbarViewInjection;
use Yiisoft\Definitions\Reference;

/**
 * Menu Navbar Module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-menu-navbar
 * @package   Mailery\Menu\Navbar
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

return [
    'maileryio/mailery-menu-navbar' => [
        'items' => [],
    ],

    'yiisoft/yii-view' => [
        'injections' => [
            Reference::to(NavbarViewInjection::class),
        ],
    ],
];

<?php

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

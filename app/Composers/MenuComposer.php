<?php

namespace Fully\Composers;

use Menu;
use Fully\Repositories\Menu\MenuInterface;

/**
 * Class MenuComposer.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class MenuComposer
{
    /**
     * @var \Fully\Repositories\Menu\MenuInterface
     */
    protected $menu;

    /**
     * @param MenuInterface $menu
     */
    public function __construct(MenuInterface $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $items = $this->menu->all();
        $menus = $this->menu->getFrontMenuHTML($items);
        $view->with('menus', $menus);
    }
}

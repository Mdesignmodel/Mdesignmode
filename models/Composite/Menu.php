<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/7
 * Time: 下午9:37
 */
namespace Composite;


class Menu extends Component
{
    protected $items;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $item \Composite\Leaf
     */
    public function add($component)
    {
        $this->items[] = $component;
    }

    public function remove($component)
    {
        $key = array_search($component,$this->items);
        if($key)
        {
            unset($this->items[$key]);
        }
    }

    public function display()
    {
        echo $this->name.PHP_EOL;
        foreach($this->items as $item)
        {
            $item->display().PHP_EOL;
        }
    }
}
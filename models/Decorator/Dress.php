<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/10
 * Time: 下午10:39
 */

namespace Decorator;

abstract class DressModel extends \Decorator\PersonModel
{
    protected $component;
    protected $type;
    protected static $list = [];

    public function setComponent($component, $type)
    {
        $this->component = $component;
        $this->type      = $type;
    }

    public function Show()
    {
        if ($this->component != null) {
            $this->component -> Show();
        }
    }

    protected function setList($name)
    {
        self::$list[] = $name;
    }

    public function getList()
    {
        return self::$list;
    }

    public function close()
    {
        self::$list = [];
    }
}

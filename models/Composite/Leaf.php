<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/5
 * Time: 下午10:33
 */
namespace Composite;

class Leaf extends Component
{
    private $url;
    public function __construct($name,$url)
    {
        $this->name = $name;
        $this->url  = $url;
    }

    public function display()
    {
        echo $this->name.$this->url.PHP_EOL;
    }
}
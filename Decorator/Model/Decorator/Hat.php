<?php
/**
 * 帽子类
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午3:54
 */
namespace Decorator;

class Hat extends \Decorator\Decorator
{
    private $hats = [
        1=>'鸭舌帽',
        2=>'圆帽',
        3=>'晚礼服帽',
        4=>'沙滩帽'
    ];

    public function Show()
    {
        parent::Show();

        $this->setList($this->getName());
    }



    private function getName()
    {
        if(!in_array($this->type,array_keys($this->hats))){
            $this->type = array_keys($this->hats)[0];
        }
        return $this->hats[$this->type];
    }
}
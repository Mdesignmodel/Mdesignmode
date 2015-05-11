<?php
/**
 * 上衣装饰类
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午2:51
 */
namespace Decorator;


class CoatModel extends \Decorator\DressModel
{

    private $coats = [
        1=>'大衣',
        2=>'衬衫',
        3=>'大T恤',
        4=>'风衣'
    ];

    public function Show()
    {
        parent::Show();
        $this->setList($this->getName());
    }



    private function getName()
    {
        if(!in_array($this->type,array_keys($this->coats))){
            $this->type = array_keys($this->coats)[0];
        }
        return $this->coats[$this->type];
    }

}
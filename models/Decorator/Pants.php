<?php
/**
 * 裤子类
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午2:58
 */
namespace Decorator;


class PantsModel extends \Decorator\DressModel
{

    private $pantses = [
        1=>'长裤',
        2=>'短裤',
        3=>'海滩裤',
        4=>'西装裤'
    ];

    public function Show()
    {
        parent::Show();

        $this->setList($this->getName());
    }

    private function getName()
    {
        if(!in_array($this->type,array_keys($this->pantses))){
            $this->type = array_keys($this->pantses)[0];
        }
        return $this->pantses[$this->type];
    }
}
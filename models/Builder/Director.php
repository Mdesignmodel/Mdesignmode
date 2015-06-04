<?php
/**
 * 指挥者类
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/27
 * Time: 下午9:47
 */
namespace Builder;

class DirectorModel
{
    public $pb;

    public function __construct($pb)
    {
        $this->pb = $pb;
    }

    public function create()
    {
        $this->pb->BuildHead();
        $this->pb->BuildBody();
        $this->pb->BuildArmLeft();
        $this->pb->BuildArmRight();
        $this->pb->BuildLegLeft();
        $this->pb->BuildLegRight();

    }
}
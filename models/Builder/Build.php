<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/27
 * Time: 下午7:31
 */
namespace Builder;

abstract class BuildModel
{
    /**
     * 头部
     * @return mixed
     */
    abstract public function BuildHead();
    abstract public function BuildBody();
    abstract public function BuildArmLeft();
    abstract public function BuildArmRight();
    abstract public function BuildLegLeft();
    abstract public function BuildLegRight();
}
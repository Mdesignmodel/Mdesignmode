<?php
/**
 *
 * 代理 pursuit 类。 但本身没有花 巧克力等，所以需要调用Pursuit类。
 *
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/13
 * Time: 上午10:54
 */
namespace Proxy;

class ProxyModel implements \Proxy\Givegift
{
    protected $model = null;

    public function __construct($name)
    {
        /*代理类可对入参进行处理*/
        if('mm'==$name){
            throw new \Exception('不能代理');
        }


        if(!$this->model){
            $this->model = new \Proxy\PursuitModel($name);
        }
    }

    public function GiveDolls()
    {
        $this->model->GiveDolls();
    }

    public function GiveFlowers()
    {
        $this->model->GiveFlowers();
    }

    public function GiveChocolate()
    {
        $this->model->GiveChocolate();
    }


}
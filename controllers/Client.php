<?php

/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午10:24
 */
class ClientController
{


    /**
     * 简单工厂模式
     */
    public function consoleAction($numA,$numB,$sign)
    {
        try{
            switch ($sign) {
                case '-':
                    $model = new \console\Operation\SubModel($numA,$numB);
                    break;
                case '*':
                    $model = new \console\Operation\MulModel($numA,$numB);
                    break;
                case'/':
                    $model = new \console\Operation\DivModel($numA,$numB);
                    break;
                case '+':
                    $model = new \console\Operation\SumModel($numA,$numB);
                    break;
                default:
                    $model = new \console\Operation\SumModel($numA,$numB);
                    break;
            }

            echo $model->getResult();
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }

    /**
     * 策略模式
     */
    public function marketAction($params)
    {
        $goodModel   = new \Market\GoodModel();
        $activeModel = new \Market\ActiveModel();
        $sum         = 0;
        foreach ($params as $param) {
            $code = $param['code'];
            $goodModel->setCode($code);
            $ratPrice = $goodModel->getPrice();

            $activeModel->setCode($code);
            $active = $activeModel->getAction();

            $context = new \Market\Context($active);
            $price   = $context->getResult($ratPrice);

            $sum += $price * $param['num'];

        }

        echo $sum;
    }

    /**
     * 装饰模式
     */
    public function decoratorAction()
    {
        /*具体输出*/
        $person = new \Decorator\PersonModel();
        $coat   = new \Decorator\CoatModel();
        $pants  = new \Decorator\PantsModel();
        $hat    = new \Decorator\HatModel();

        $coat->setComponent($person, 2);
        $pants->setComponent($coat, 3);
        $pants->Show();

        $list = $pants->getList();
        foreach ($list as $l) {
            echo $l . ' ';
        }
        $pants->close();

        $hat->setComponent($person, 1);
        $pants->setComponent($hat, 3);
        $coat->setComponent($pants, 2);
        $coat->Show();

        $list = $coat->getList();
        foreach ($list as $l) {
            echo $l . ' ';
        }
        $coat->close();
    }

    /**
     * 代理模式
     */
    public function proxyAction()
    {
        $girl = new \Proxy\GirlModel();
        $girl->setName('娇娇');

        $pursuit = new \Proxy\PursuitModel($girl->getName());
        $pursuit->GiveFlowers();

    }
}
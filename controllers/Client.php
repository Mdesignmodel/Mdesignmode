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
    public function simpleconsoleAction($numA, $numB, $sign)
    {
        try {
            switch ($sign) {
                case '-':
                    $model = new \console\Operation\SubModel();
                    break;
                case '*':
                    $model = new \console\Operation\MulModel();
                    break;
                case'/':
                    $model = new \console\Operation\DivModel();
                    break;
                case '+':
                    $model = new \console\Operation\SumModel();
                    break;
                default:
                    $model = new \console\Operation\SumModel();
                    break;
            }
            $model->setNumA($numA);
            $model->setNumB($numB);

            echo $model->getResult();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * 工厂方法模式
     */
    public function factoryAction($numA, $numB)
    {
        $fmodel = new \Console\Factory\SumModel();
        $model  = $fmodel->createOperation();
        $model->setNumA($numA);
        $model->setNumB($numB);

        echo $model->getResult();
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

        $proxyModel = new \Proxy\ProxyModel($girl->getName());

        $proxyModel->GiveFlowers();
        $proxyModel->GiveChocolate();
        $proxyModel->GiveDolls();

    }

    /**
     * 原型 复制模式
     */
    public function copyAction()
    {
        $obj = new \Copy\ResumeModel();
        $obj->setNames(1);
        $obj->setNames(2);
        $obj2 = clone $obj;
        $obj2->setNames(3);

        var_export($obj->getNames());
        var_export($obj2->getNames());

//        $obj->obj1 = new \Copy\SubObject();
//        $obj->obj2 = new \Copy\SubObject();

//        $obj2 = clone $obj;

//        var_export($obj);
//        var_export($obj2);

    }

    /**
     * 模板模式
     */
    public function templateAction()
    {
        $pA = new \Template\PaperAModel();
        $pA->setName('ming');
        echo '名字' . $pA->getName();
        $pA->question1();
        $pA->question2();
        $pA->question3();

        $pB = new \Template\PaperBModel();
        $pB->setName('yun');
        echo '名字' . $pB->getName();
        $pB->question1();
        $pB->question2();
        $pB->question3();
    }

    /**
     * 外观模式
     */
    public function facadeAction()
    {
        $fundA = new \Facade\FundAModel();
        $fundA->buy();

        $fundB = new \Facade\FundBModel();
        $fundB->sell();
    }

    /**
     * 建造者模式
     */
    public function builderAction()
    {
        $thin = new \Builder\PersonThinModel();
        $fat  = new \Builder\PersonFatModel();

        $director = new \Builder\DirectorModel($thin);
        $director->create();

//        $director = new \Builder\DirectorModel($fat);
//        $director->create();
    }

    /**
     * 观察者模式
     */
    public function observerAction()
    {
        $girl = new \Observer\People\GirlModel();
        $boy  = new \Observer\People\BoyModel();

        $paper = new \Observer\PaperModel();
        $paper->register($girl);
        $paper->register($boy);

        $paper->trigger();
    }

    /**
     * 单例模式
     */
    public function singletonAction()
    {
        echo '--' . __LINE__ . '--';
        $one = new \Singleton\OneModel();
        echo '--' . __LINE__ . '--';
        $two = \Singleton\OneModel::getInstance();
        echo '--' . __LINE__ . '--';
        $three = new \Singleton\OneModel();
        echo '--' . __LINE__ . '--';
        $four = \Singleton\OneModel::getInstance();

        return true;
    }

    /**
     * 抽象工厂模式
     *
     * 缺点： 增加新动物的时候，需要修改factory文件
     *  解决：引入反射模式：
     */
    public function abfactoryAction()
    {
        $blackModel = new \Abfactory\BlackfactoryModel();
        $cat        = $blackModel->creatCat();
        $cat->eat();

        $whiteModel = new \Abfactory\WhitefactoryModel();
        $dog        = $whiteModel->creatDog();
        $dog->eat();

        /*反射模式*/
        $dog     = '\Abfactory\Dog\BlackModel';
        $factory = new \Abfactory\FactoryModel();
        $model   = $factory->create($dog);
        $model->eat();

    }

    /**
     * 状态模式
     */
    public function stateAction()
    {

        $workModel = new \State\Work();
        $workModel->setState(new \State\Status\StateA());

//
        $workModel->setHour(11);
        $workModel->request();

        $workModel->setHour(13);
        $workModel->request();

        $workModel->setHour(16);
        $workModel->request();

        $workModel->setHour(18);
        $workModel->request();

        /*切回下午的状态*/
        $workModel->setState(new \State\Status\StateC());
        $workModel->setHour(18);
        $workModel->setFinish(true);
        $workModel->request();


    }


}
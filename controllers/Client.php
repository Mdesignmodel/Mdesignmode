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
        $finish    = true;
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
        $workModel->setFinish($finish);
        $workModel->request();

    }

    /**
     * 适配器模式
     */
    public function adapterAction()
    {
        $forward = new \Adapter\Player\Forwards('xx');
        $forward->Attack();

        $guards = new \Adapter\Player\Guards('yy');
        $guards->Attack();

        $center = new \Adapter\Player\Translator('YM');
        $center->attack();
    }

    /**
     * 备忘录模式
     */
    public function mementoAction()
    {
        $people = new \Memento\Gamepeople();
        $people->setState('on');

        $taker = new \Memento\Caretaker();
        $taker->setMemento($people->createMemento());

        $people->setState('off');
        echo $people->getState();

        $people->reset($taker->getMemento());
        echo $people->getState();

    }

    /**
     * 组合模式
     */
    public function compositeAction()
    {
        $submenu1 = new \Composite\Menu('submenu1');
        $submenu2 = new \Composite\Menu('submenu2');

        $leaf1 = new \Composite\Leaf('leaf1', 'url1');
        $leaf2 = new \Composite\Leaf('leaf2', 'url2');
        $leaf3 = new \Composite\Leaf('leaf3', 'url3');
        $leaf4 = new \Composite\Leaf('leaf4', 'url4');
        $leaf5 = new \Composite\Leaf('leaf5', 'url5');

        $submenu1->add($leaf1);
        $submenu1->add($leaf2);
        $submenu1->add($leaf3);

        $submenu2->add($leaf4);
        $submenu2->add($leaf5);

        $memu = new \Composite\Menu('allmenu');
        $memu->add($submenu1);
        $memu->add($submenu2);
        $memu->display();
    }

    /**
     * 迭代器模式
     */
    public function iteratorAction()
    {
        $array = [1 => 1, 2 => 2, 3 => 3];
        $a     = new \Iterator\Aggregate($array);
        $i     = new \Iterator\Menuiterator($a);

        while ($i->valid()) {
            echo $i->key() . '=>' . $i->current() . PHP_EOL;
            $i->next();
        }

        $array = [1 => 'a', 2 => 'b', 3 => 'c'];
        $a     = new \Iterator\Aggregate($array);
        $si    = new \Iterator\Sampleiterator($a);

        while ($si->valid()) {
            echo $si->key() . '=>' . $si->current() . PHP_EOL;
            $si->next();
        }
    }

    /**
     * 命令模式
     */
    public function commandAction()
    {
        $boy = 'boy';
        $boy1 = 'boy1';
        $muttom1 = new \Command\Barbecuer\BakemuttonModel($boy);
        $muttom2 = new \Command\Barbecuer\BakemuttonModel($boy1);
        $chicken = new \Command\Barbecuer\BakechickenModel($boy);

        $waiter = new \Command\WaiterModel();
        $waiter->set($muttom1);
        $waiter->set($muttom2);
        $waiter->set($chicken);

        $waiter->notify();
    }


}
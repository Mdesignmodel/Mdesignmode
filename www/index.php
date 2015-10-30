<?php
define('DIR', __DIR__ );

require DIR.'/../../lib/base.php';



$client = new ClientController();

/*装饰模式*/
//$client->decoratorAction();

/*简单工厂模式*/
//$client->consoleAction(2,3,'+');

/*工厂方法模式*/
//$client->factoryAction(2,3);

/*策略模式*/
//$params = array(
//    ['code'=>1,'num'=>2],
//    ['code'=>2,'num'=>1],
//);
//$client->marketAction($params);

/*代理模式*/
//$client->proxyAction();

/*原型模式*/
//$client->copyAction();

/*模板模式*/
//$client->templateAction();

/*外观模式*/
//$client->facadeAction();

/*建造者模式*/
//$client->builderAction();

/*观察者模式*/
//$client->observerAction();

/*单例模式*/
//$client->singletonAction();

/*抽象工厂模式*/
//$client->abfactoryAction();

/*状态模式*/
//$client->stateAction();

/*适配器模式*/
//$client->adapterAction();

/*备忘录模式*/
//$client->mementoAction();

/*组合模式*/
//$client->compositeAction();

/*迭代器模式*/
//$client->iteratorAction();


/*命令模式*/
$client->commandAction();
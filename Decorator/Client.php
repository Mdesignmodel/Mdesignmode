<?php
/**
 * 换装游戏 具体拼装展示
 *
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午2:45
 */

class client
{
    public function indexAction()
    {
        /*具体输出*/
        $person = new \Decorator\Person();
        $coat = new \Decorator\Coat();
        $pants = new \Decorator\Pants();
        $hat = new \Decorator\Hat();

        $coat->setComponent($person,2);
        $pants->setComponent($coat,3);
        $pants->Show();

        $list = $pants->getList();
        foreach($list as $l){
            echo $l.' ';
        }
        $pants->close();

        $hat->setComponent($person,1);
        $pants->setComponent($hat,3);
        $coat->setComponent($pants,2);
        $coat->Show();

        $list = $coat->getList();
        foreach($list as $l){
            echo $l.' ';
        }
        $coat->close();

    }
}


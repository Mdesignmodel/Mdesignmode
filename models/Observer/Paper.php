<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/4
 * Time: 下午10:49
 */
namespace Observer;

class PaperModel
{
    private $observers = [];

    public function register($obs)
    {
        $this->observers[] = $obs;
    }

    public function trigger()
    {
        if(!empty($this->observers)){
            foreach($this->observers as $observer){
                $observer->update();
            }
        }
    }
}
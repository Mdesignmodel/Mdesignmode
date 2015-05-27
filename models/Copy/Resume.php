<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/17
 * Time: 下午3:46
 */
namespace Copy;

class ResumeModel implements \Copy\PrototypeModel
{
    public $obj1;
    public $obj2;
    public $names=[];


    public function setNames($name)
    {
        $this->names[] = $name;
    }

    public function getNames()
    {
        return $this->names;
    }



    public function Copy()
    {

//        return clone $this;
        /**
         * 浅拷贝
         */
        //return clone $this;

    }


    public function __clone()
    {
        /* 强制复制一份this->object， 否则仍然指向同一个对象*/
//        $this->obj1 = clone $this->obj1;
        $this->names = [];
    }

}
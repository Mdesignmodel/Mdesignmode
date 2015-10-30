<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/10/29
 * Time: 下午4:49
 */
namespace Command;

class CustomModel
{
    /**
     * @var int $no 编号
     */
    public $no;

    public $list;

    public $backlist;


    public function setNo($no)
    {
        $this->no = $no;
    }

    public function getNo()
    {
        return $this->no;
    }

    public function setList($list)
    {
        $this->list = $list;
    }

    public function getList()
    {
        return $this->list;
    }

    public function getBacklist()
    {
        return $this->backlist;
    }

    public function setBacklist($backlist)
    {
        $this->backlist = $backlist;

    }
}
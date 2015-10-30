<?php
/**
 * 服务员 用于接收命令
 * User: abu
 * Date: 15/10/29
 * Time: 下午4:30
 */
namespace Command;

class ServerModel
{

    /**
     * @var array
     */
    private $list = [];

    /**
     *
     */
    private $backlist = [];

    /**
     * @var int
     */
    private $no;

    /**
     * @var array
     */
    private $no_m = [];

    private $namelist = ['A', 'B', 'C', 'D'];

    private $position;

    /**
     * @param string $no
     */
    public function __construct($position = 'custom')
    {
        $this->position = $position;
    }

    public function createNo()
    {
        $no = empty($this->list) ? 1 : max(array_keys($this->list)) + 1;

        return $no;
    }

    /**
     * @param string $position custom | cook
     * @param \Command\CustomModel | null $m
     * @return array|mixed
     */
    public function call($position = 'custom', $m = null)
    {
        $this->position = $position;
        if ('custom' == $position) {
            if (null == $m) {
                return false;
            }
            if (empty($m->getNo())) {
                $this->no = $this->createNo();
            } else {
                $this->no = $m->getNo();
            }

            return $this->no;
        }
        if ('cook' == $position) {
            return $this->list;
        }

        return false;
    }


    /**
     *  设置菜单列表
     * @param $names
     */
    public function setNamelist($names)
    {
        $this->namelist = $names;
    }

    /**
     * 获取菜单列表
     * @return array
     */
    public function getNamelist()
    {
        return $this->namelist;
    }

    public function add($name, $num)
    {
        if (in_array($name, $this->namelist)) {
            if (isset($this->list[$this->no][$name])) {
                $this->list[$this->no][$name] += $num;
            } else {
                $this->list[$this->no][$name] = $num;
            }
        }
    }

    public function delete($name, $num)
    {
        if (isset($this->list[$this->no][$name])) {
            $this->list[$this->no][$name] -= $num;
            if ($this->list[$this->no]['name'] <= 0) {
                unset($this->list[$this->no]['name']);
            }
        }
    }

    public function getList()
    {
        return $this->list;
    }

    public function setBacklist($list)
    {
        if ('cook' == $this->position) {
            $this->backlist = $list;
        }
    }

    public function getBacklist($no)
    {
        return (empty($this->backlist) || !isset($this->backlist[$no])) ? (isset($this->list[$no]) ? $this->list[$no] : '') : $this->backlist[$no];
    }
}
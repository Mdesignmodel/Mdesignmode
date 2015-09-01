<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/9/1
 * Time: 下午7:57
 */
namespace Bridge\Software;


class Addresslist extends \Bridge\Software
{
    /**
     * 主键
     * @var int
     */
    protected $id = 0;
    /**
     * 姓名
     * @var string
     */
    protected $name = '';

    /**
     * 电话
     * @var string
     */
    protected $mobile = '';

    /**
     * 地址
     * @var string
     */
    protected $area = '';


    /**
     * 设置ID
     * @param $id int
     */
    public function setId($id)
    {
        $this->id = intval($id);
    }

    /**
     * 获取ID
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置姓名
     * @param $name
     */
    public function setName($name)
    {
        $this->name = trim($name);
    }

    /**
     * 获取姓名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置电话号码
     * @param $no string  电话号码  手机号  固话
     */
    public function setMobile($no)
    {
        $this->mobile = trim($no);
    }

    /**
     * 获取电话号码
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 设置地址
     * @param $area string   地址
     */
    public function setArea($area)
    {
        $this->area = trim($area);
    }

    /**
     * 获取地址
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * 获取主键
     */
    public function getPrimaryKey()
    {
        return 'id';
    }


    /**
     * 查找
     */
    public function find($id)
    {
        //select($id);
    }

    /**
     * 新增
     */
    public function add()
    {
        $array = $this->toArray();
        unset($array[$this->getPrimaryKey()]);
        //insert($array);
    }

    /**
     * 删除
     */
    public function delete()
    {
        $array = $this->toArray();
        $id    = $array[$this->getPrimaryKey()];

        //delete($id);
    }

    /**
     * 更新
     */
    public function update()
    {
        $array = $this->toArray();
        $id    = $array[$this->getPrimaryKey()];
        unset($array[$this->getPrimaryKey()]);

        //update($array,$id);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id'     => $this->id,
            'name'   => $this->name,
            'mobile' => $this->mobile,
            'area'   => $this->area
        ];
    }

}
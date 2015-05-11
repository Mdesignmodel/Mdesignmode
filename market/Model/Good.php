<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/7
 * Time: 下午8:17
 */
namespace Market;

class GoodModel
{
    /**
     * 商品编码
     * @var string
     */
    protected $code = '';

    /**
     * 商品价格
     * @var int
     */
    protected $price = 0 ;

    public function __construct()
    {
    }

    public function setCode($code)
    {
        $this->code = $code;
    }



    public function getPrice()
    {

        return 11;
    }
}
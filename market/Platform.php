<?php
/**
 * 输入商品信息和数据 获取总价
 */

namespace Market;
class PlatformController
{
    /**
     * 根据参数进行计算
     */
    public function totalAction($params)
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

        return $sum;
    }

}
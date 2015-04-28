<?php
/**
 * 使用面向对象实现一个计算器控制台程序，要求输入两个数和运算符号得到结果
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/16
 * Time: 上午10:41
 */

namespace console;
class Platform
{
    /**
     * 根据参数进行计算
     */
    public static function compute($numA,$numB,$sign)
    {
        try{
            switch ($sign) {
                case '-':
                    $model = new \console\Operation\SubModel($numA,$numB);
                    break;
                case '*':
                    $model = new \console\Operation\MulModel($numA,$numB);
                    break;
                case'/':
                    $model = new \console\Operation\DivModel($numA,$numB);
                    break;
                case '+':
                    $model = new \console\Operation\SumModel($numA,$numB);
                    break;
                default:
                    $model = new \console\Operation\SumModel($numA,$numB);
                    break;
            }

            return $model->getResult();
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
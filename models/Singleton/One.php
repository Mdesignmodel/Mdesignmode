<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/11
 * Time: 下午2:20
 */
namespace Singleton;

class OneModel
{
    private static $instance;

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function __construct()
    {
        echo 1;
    }

    public function __clone()
    {
        throw new \Exception('单例模式禁克隆');
    }

}
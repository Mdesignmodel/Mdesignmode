<?php
/**
 * 基础文件
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午9:11
 */
define('ROOT', __DIR__ . '/..');

function decorator_autoload($classname)
{
    $paths = [
        '/',
        '/models/',
        '/controllers/'
    ];

    foreach ($paths as $path) {

        $classname = str_replace('\\', '/', $classname);
        $classname = str_replace(array('Model','Controller'), '', $classname);

        $path = ROOT . $path . $classname . '.php';

        if (is_file($path)) {

            require $path;

            return false;
        }
    }
    return false;
}

/**
 * 如果在你的程序中已经实现了__autoload()函数，它必须显式注册到__autoload()队列中。
 * 因为 spl_autoload_register()函数会将Zend Engine中的__autoload()函数取代为spl_autoload()或spl_autoload_call()。
 *
 * 如果需要多条 autoload 函数，spl_autoload_register() 满足了此类需求。
 * 它实际上创建了 autoload 函数的队列，按定义时的顺序逐个执行。相比之下， __autoload() 只可以定义一次。
 */
spl_autoload_register('decorator_autoload');
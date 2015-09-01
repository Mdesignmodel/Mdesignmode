<?php
/**
 *  PHP  已集成
 * @link  http://php.net/manual/en/class.iterator.php
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/13
 * Time: 下午12:09
 */
namespace Iterator;

class Menuiterator extends Iterator
{
    protected $array;
    protected $keys;
    protected $values;
    protected $position = 0;

    /**
     * @param $aggregate \Iterator\Aggregate
     */
    public function __construct($aggregate)
    {
        $this->keys   = $aggregate->getKeys();
        $this->values = $aggregate->getValues();

    }

    public function reset()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->values[$this->position];
    }

    public function key()
    {
        return $this->values[$this->position];
    }

    /**
     * 是否存在
     * @return bool
     */
    public function valid()
    {
        return isset($this->keys[$this->position]);
    }

    public function next()
    {
        $this->position++;
    }

}
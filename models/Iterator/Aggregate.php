<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/13
 * Time: 下午12:11
 */
namespace Iterator;

class Aggregate
{
    protected $array;
    protected $keys;
    protected $values;

    public function __construct($array)
    {
        if (empty($array)) {
            throw new \Exception('array is empty');
        }

        $this->setArray($array);
    }

    protected function setArray($array)
    {
        $this->array = $this->reverse($array);
    }

    /**
     * 倒序输出
     * @param $array
     * @return array
     */
    protected function reverse($array)
    {
        $keys   = array_keys($array);
        $values = array_values($array);

        $newArray = [];

        for ($i = count($array) - 1; $i >= 0; $i--) {

            $newArray[$keys[$i]] = $values[$i];
        }

        $this->keys   = array_keys($newArray);
        $this->values = array_values($newArray);

        return $newArray;
    }

    public function getArray()
    {
        return $this->array;
    }

    public function getKeys()
    {
        return $this->keys;
    }

    public function getValues()
    {
        return $this->values;
    }
}
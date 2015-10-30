<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/10/29
 * Time: 下午4:32
 */

namespace Command;

class CookModel
{
    private $list;
    protected $namelist = ['A','B','C'];

    public function setList($list)
    {
        $this->list = $list;
    }

    public function getBackList()
    {
        foreach($this->list as $no=>$l){
            $names = array_keys($l);
            foreach($names as $n){
                if(!in_array($n,$this->namelist)){
                    unset($this->list[$no][$n]);
                }
            }

        }
        return $this->list;
    }




}
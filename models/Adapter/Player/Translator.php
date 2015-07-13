<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/18
 * Time: 下午4:22
 */
namespace Adapter\Player;

class Translator extends AbstractModel
{
    private $player;
    public function __construct($name)
    {
        $this->player = new \Adapter\Player\Foreigncenter();
        $this->player->setName($name);
    }

    public function attack()
    {
        $this->player->jinggong();
    }

    public function defense()
    {
        $this->player->fanzou();
    }
}
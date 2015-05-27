<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/25
 * Time: 下午4:52
 */
namespace Template;

abstract class ExampaperModel
{
    protected $name;

    function question1()
    {
        echo '问题1';
        echo '答案' . $this->answer1();
    }

    function question2()
    {
        echo '问题2';
        echo '答案' . $this->answer2();
    }

    function question3()
    {
        echo '问题3';
        echo '答案' . $this->answer3();
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    abstract function answer1();

    abstract function answer2();

    abstract function answer3();

}
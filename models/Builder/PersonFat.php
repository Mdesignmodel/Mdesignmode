<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/27
 * Time: 下午9:36
 */
namespace Builder;

class PersonFatModel extends \Builder\BuildModel
{
    protected $im = '';

    public function BuildHead()
    {
        //新建一个真彩色图像，默认背景是黑色，返回图像标识符。另外还有一个函数 imagecreate 已经不推荐使用。
        $this->im = imagecreatetruecolor(300, 200);
        //2、绘制所需要的图像
        $red = imagecolorallocate($this->im, 255, 0, 0); //创建一个颜色，以供使用
        imageellipse($this->im, 30, 30, 45, 40, $red); //画一个圆。参数说明：30，30为圆形的中心坐标；40，40为宽和高，不一样时为椭圆；$red为圆形的颜色（框颜色）
        //3、输出图像
        header("content-type: image/png");
        imagepng($this->im); //输出到页面。如果有第二个参数[,$filename],则表示保存图像
        //4、销毁图像，释放内存
        imagedestroy($this->im);

    }

    public function BuildBody()
    {
        echo '身体';
    }

    public function BuildArmLeft()
    {
        echo '左手';
    }

    public function BuildArmRight()
    {
        echo '右手';
    }

    public function BuildLegLeft()
    {
        echo '左脚';
    }

    public function BuildLegRight()
    {
        echo '右脚';
    }
}
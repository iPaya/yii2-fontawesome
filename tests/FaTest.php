<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPayaUnit\fontAwesome;


use iPaya\fontAwesome\Fa;
use yii\base\Action;
use yii\base\Module;
use yii\web\Controller;

class FaTest extends TestCase
{
    public function testI()
    {
        $output = Fa::i('home');
        $expected = <<<EXPECRTED
<i class="fa fa-home"></i>
EXPECRTED;
        $this->assertEqualsWithoutLE($expected, $output);
    }
}
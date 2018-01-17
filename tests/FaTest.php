<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPayaUnit\Yii2\FontAwesome;


use iPaya\Yii2\FontAwesome\Fa;

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

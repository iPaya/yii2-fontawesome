<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPayaUnit\Yii2\FontAwesome;


use iPaya\Yii2\FontAwesome\FontAwesomeAsset;

class FontAwesomeAssetTest extends TestCase
{
    public function testAsset()
    {
        \Yii::$app->view->registerAssetBundle(FontAwesomeAsset::className());
        $output = \Yii::$app->view->renderAjax('@iPayaUnit/Yii2/FontAwesome/data/views/layout.php', [
            'content' => ''
        ]);
        static::assertRegExp(
            '~<link href="/assets/[0-9a-f]+/css/font-awesome.css" rel="stylesheet">~',
            $output,
            'Css asset should be registered.'
        );
    }
}

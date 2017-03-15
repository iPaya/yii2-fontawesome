<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPayaUnit\fontAwesome;


use iPaya\fontAwesome\FontAwesomeAsset;

class FontAwesomeAssetTest extends TestCase
{
    public function testAsset()
    {
        \Yii::$app->view->registerAssetBundle(FontAwesomeAsset::className());
        $output = \Yii::$app->view->renderAjax('@iPayaUnit/fontAwesome/data/views/layout.php', [
            'content' => ''
        ]);
        static::assertRegExp(
            '~<link href="/assets/[0-9a-f]+/css/font-awesome.css" rel="stylesheet">~',
            $output,
            'Css asset should be registered.'
        );
    }
}
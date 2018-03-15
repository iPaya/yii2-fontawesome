<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Yii2\FontAwesome\WebFontsWithCss;


use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@iPaya/Yii2/FontAwesome/WebFontsWithCss/assets';
    public $css = [
        YII_DEBUG ? 'css/fontawesome.css' : 'css/fontawesome.min.css'
    ];
}

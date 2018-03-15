<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Yii2\FontAwesome\SvgWithJs;


use yii\web\AssetBundle;
use yii\web\View;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@iPaya/Yii2/FontAwesome/SvgWithJs/assets';
    public $js = [
        YII_DEBUG ? 'js/fontawesome-all.js' : 'js/fontawesome-all.min.js'
    ];
    public $css = [
        'css/fa-svg-with-js.css'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}

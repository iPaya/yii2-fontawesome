<?php
/**
 * @author Di Zhang <alex@extong.net>
 */

namespace yiizh\fontawesome;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fontawesome/font-awesome';

    public $css = [
        'css/font-awesome.css'
    ];

    public $publishOptions = [
        'only' => [
            'css',
            'fonts',
        ]
    ];
}
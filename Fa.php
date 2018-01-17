<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Yii2\FontAwesome;

use yii\helpers\Html;

class Fa
{
    /**
     * @param string $name icon name
     * @return string
     */
    public static function i($name)
    {
        return Html::tag('i', null, ['class' => 'fa fa-' . $name]);
    }
}

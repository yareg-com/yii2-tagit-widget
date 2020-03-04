<?php

namespace freepzu\tagit;

use yii\web\AssetBundle;

/**
 * 
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class TagitAsset extends AssetBundle
{

    public $sourcePath = '/';
    public $js = ['js/tag-it.min.js'];
    public $css = [
        'css/jquery.tagit.min.css',
        'css/tagit.ui-zendesk.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
    ];

}

<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;
use yii\web\View;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	
    public $css = [
        'css/site.css',
        'css/menu.css',
        'css/slider-style.css',
		'css/scrolling-sections.css',
    ];
	
    public $js = [		
		['js/modernizr.custom.28468.js','position' => View::POS_HEAD],
		['js/jquery.cslider.js','position' => View::POS_END],
		['js/menu.js','position'=>View::POS_END],
		['js/jquery-easing.min.js', 'position' => View::POS_END],
		['js/scrolling-page.js', 'position' => View::POS_END],
    ];
	
    public $jsOptions =[
		/* /assets/2cb27072/jquery.js" - սեփական փաթեթից գնա վերև: */
        'position' =>  View::POS_HEAD
    ];

    public $depends = [
        'yii\web\YiiAsset', /* jquery.js*/
        'yii\bootstrap\BootstrapAsset', /* bootstrap.css*/
        'yii\bootstrap\BootstrapPluginAsset', /* bootstrap.js*/
    ];
}

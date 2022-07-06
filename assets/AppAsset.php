<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/br_img.css',
        'assets/Library/BS4/css/bootstrap.min.css',
        'assets/Library/AOS/aos-master/dist/aos.css',
        'assets/Library/SLICK/slick-1.8.1/slick/slick.css',
        'assets/Library/FONTAWESOME/font-awesome-pro-5.15.4/css/all.css',
        'assets/Library/FONTAWESOME/font-awesome-pro-5.15.4/css/all.min.css',
    ];
    public $js = [
        'assets/Library/AOS/aos-master/dist/aos.js',
        'js/index.js',
        'assets/Library/JQUERY/jquery.min.js',
        'assets/Library/JQUERY/jquery.slim.min.js',
        'assets/Library/BS4/js/bootstrap.min.js',
        'assets/Library/SLICK/slick-1.8.1/slick/slick.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}

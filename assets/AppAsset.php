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
        'css/bootstrap.min.css',
        //'css/bootstrap.rtl.css',
       // 'css/bootstrap-grid.css',
       // 'css/bootstrap-grid.rtl.css',
      //  'css/bootstrap-reboot.css',
      //  'css/bootstrap-reboot.rtl.css',
        'css/bootstrap-utilities.css',
       // 'css/bootstrap-utilities.rtl.css',
        'css/style.css',
      //  'css/site.css',
        'css.bootstrap-icons.css'
    ];
    public $js = [
        'js/bootstrap.bundle.min.js'
    ];
    public $depends = [
   //    'yii\web\YiiAsset',
     //   'yii\bootstrap4\BootstrapAsset',
    ];
}
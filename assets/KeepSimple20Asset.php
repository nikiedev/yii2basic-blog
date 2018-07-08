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
class KeepSimple20Asset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'keep-simple20/css/default.css',
		'keep-simple20/css/layout.css',
		'keep-simple20/css/media-queries.css',
	];
	public $js = [
		'keep-simple20/js/modernizr.js',
		//'keep-simple20/js/jquery-1.10.2.min.js',
        'keep-simple20/js/jquery-migrate-1.2.1.min.js',
        'keep-simple20/js/main.js',
	];
	public $depends = [

	];
}

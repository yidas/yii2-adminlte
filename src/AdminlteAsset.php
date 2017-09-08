<?php

namespace yidas\yii\adminlte;

/**
 * AdminLTE Dependent Source Asset 
 *
 * @author  Nick Tsai <myintaer@gmail.com>
 * @package almasaeed2010/adminlte
 * @see     https://github.com/almasaeed2010/AdminLTE
 */
class AdminlteAsset extends \yii\web\AssetBundle
{
    /**
     * Bundle with Dependent Source Package
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/AdminLTE.min.css',
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    /**
     * @package yidas/yii2-fontawesome
     * @see     https://github.com/yidas/yii2-fontawesome
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yidas\yii\fontawesome\FontawesomeAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '_all-skins';

    /**
     * @inherit
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid AdminLTE skin specified');
            }
            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}
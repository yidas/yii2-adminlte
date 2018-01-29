<?php

namespace yidas\adminlte\plugins;

/**
 * iCheck plugin of AdminLTE Dependent Source Asset 
 *
 * @author  Nick Tsai <myintaer@gmail.com>
 * @package almasaeed2010/adminlte
 * @see     https://github.com/almasaeed2010/AdminLTE/tree/master/plugins/iCheck
 */
class iCheckAsset extends \yii\web\AssetBundle
{
    /**
     * Bundle with Dependent Source Package
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/iCheck';

    public $js = [
        'icheck.min.js'
    ];

    /**
     * @var string iCheck pluing CSS path string
     *
     * @see @see https://adminlte.io/themes/AdminLTE/pages/examples/login.html
     */
    public $skin = 'square/blue';

    /**
     * @inherit
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            $this->css[] = sprintf('%s.css', $this->skin);
        }

        parent::init();
    }
}
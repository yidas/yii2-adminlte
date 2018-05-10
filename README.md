<p align="center">
<!--     <a href="https://adminlte.io/" target="_blank">
        <img src="https://centosinstall.com/wp-content/uploads/2017/04/adminlte-thumbnail.jpg" height="100px">
    </a> -->
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">AdminLTE Extension for Yii 2 </h1>
    <br>
</p>

AdminLTE Asset Bundle for Yii2 Framework

[![Latest Stable Version](https://poser.pugx.org/yidas/yii2-adminlte/v/stable?format=flat-square)](https://packagist.org/packages/yidas/yii2-adminlte)
[![Latest Unstable Version](https://poser.pugx.org/yidas/yii2-adminlte/v/unstable?format=flat-square)](https://packagist.org/packages/yidas/yii2-adminlte)
[![License](https://poser.pugx.org/yidas/yii2-adminlte/license?format=flat-square)](https://packagist.org/packages/yidas/yii2-adminlte)

This is the [AdminLTE](https://adminlte.io/) extension for [Yii framework 2.0](http://www.yiiframework.com/). It encapsulates [AdminLTE](https://github.com/almasaeed2010/AdminLTE) distribution assets and thus makes using AdminLTE in Yii applications extremely easy.

---


INSTALLATION
------------

The preferred install way is through [Composer](http://getcomposer.org/download/):

```
composer require yidas/yii2-adminlte
```

Or you could also edit `composer.json` with adding package in require section then run `composer update`.

```
"yidas/yii2-adminlte": "~2.1.0"
```

---

CONFIGURATION
-------------

Register or depend Asset into your application:

```php
yidas\adminlte\AdminlteAsset
```
    
For eaxmple, to register AdminLTE assets in view :

```php
\yidas\adminlte\AdminlteAsset::register($this);
```
    
Or as dependency in your app asset bundle :    

```php
namespace app\assets;
use yii\web\AssetBundle;
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yidas\adminlte\AdminlteAsset'
    ];
}
```

---

CUSTOMIZATION
-------------

### Skin

Configurate asset in `config` file:

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\adminlte\AdminlteAsset' => [
                'skin' => 'skin-black',
            ],
        ],
    ],
],
```




---

USAGE
-----

### Version Control

#### Update dependent packages

    composer update yidas/yii2-adminlte

#### Update newest AdminLTE version

    composer update almasaeed2010/AdminLTE

#### Specify a AdminLTE version

    composer require almasaeed2010/AdminLTE 2.4.0
    
---

PLUGINS
-------

This package provides asset bundles of AdminLTE plugins:

### iCheck

Register or depend Asset into your application:

```php
yidas\yii2\adminlte\plugins\iCheckAsset
```
    
You could additionally register AdminLTE iCheck assets in view:

```php
\yidas\yii2\adminlte\plugins\iCheckAsset::register($this);
```

#### Skin

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yidas\yii2\adminlte\plugins\iCheckAsset' => [
                'skin' => 'flat/aero',
            ],
        ],
    ],
],
```

TEMPLATES
---------

Once the extension is installed, you can have a preview by reconfiguring the path mappings of the view component in config:

```php
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                   '@app/views' => '@vendor/yidas/yii2-adminlte/templates/example'
                ],
            ],
        ],
    ],
```

> Support both [Yii 2 Advanced Application Template](https://github.com/yiisoft/yii2-app-advanced) or [Basic Application Template](https://github.com/yiisoft/yii2-app-basic).

### Simple Theme

Very simple AdminLTE layout for startup.

```php
'@app/views' => '@vendor/yidas/yii2-adminlte/templates/simple'
```

```php
'@app/views' => '@vendor/yidas/yii2-adminlte/templates/simple_zh-TW'
```

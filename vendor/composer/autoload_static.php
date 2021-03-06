<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6016b4213141ca5fc9252b0672019cc
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BGame\\ZhaJinHua\\' => 16,
            'BGame\\Douniu\\' => 13,
            'BGame\\Base\\' => 11,
            'BGameServer\\Douniu\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BGame\\ZhaJinHua\\' => 
        array (
            0 => __DIR__ . '/..' . '/lizhibin/douniu-game/zhajinhua',
        ),
        'BGame\\Douniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/lizhibin/douniu-game/douniu',
        ),
        'BGame\\Base\\' => 
        array (
            0 => __DIR__ . '/..' . '/lizhibin/douniu-game/base',
        ),
        'BGameServer\\Douniu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/game-server',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6016b4213141ca5fc9252b0672019cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6016b4213141ca5fc9252b0672019cc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

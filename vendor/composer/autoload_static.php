<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1313fc1150453c55af9432ea185bc048
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BGame\\Douniu\\' => 13,
            'BGameServer\\Douniu\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BGame\\Douniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/lizhibin/douniu-game/lib',
        ),
        'BGameServer\\Douniu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/game-server',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1313fc1150453c55af9432ea185bc048::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1313fc1150453c55af9432ea185bc048::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

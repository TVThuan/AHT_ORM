<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d01ca170e5f3d97441806249612217e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AHT_ORM\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AHT_ORM\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d01ca170e5f3d97441806249612217e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d01ca170e5f3d97441806249612217e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

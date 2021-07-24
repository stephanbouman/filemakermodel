<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90dae25cccb504f9dccf46d6c82b1d15
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ifresh\\FilemakkerModel\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ifresh\\FilemakkerModel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90dae25cccb504f9dccf46d6c82b1d15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90dae25cccb504f9dccf46d6c82b1d15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90dae25cccb504f9dccf46d6c82b1d15::$classMap;

        }, null, ClassLoader::class);
    }
}
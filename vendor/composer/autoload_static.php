<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d14201b573dc916805a251f49a9f212
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Resource\\' => 9,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Resource\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resource',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d14201b573dc916805a251f49a9f212::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d14201b573dc916805a251f49a9f212::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d14201b573dc916805a251f49a9f212::$classMap;

        }, null, ClassLoader::class);
    }
}

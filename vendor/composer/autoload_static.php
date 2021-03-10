<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1332b7f5d3a08390782d26fe2883e596
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1332b7f5d3a08390782d26fe2883e596::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1332b7f5d3a08390782d26fe2883e596::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1332b7f5d3a08390782d26fe2883e596::$classMap;

        }, null, ClassLoader::class);
    }
}

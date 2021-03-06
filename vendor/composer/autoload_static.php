<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8234f2d69f3cf78be80ae5e4fdb37e8
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8234f2d69f3cf78be80ae5e4fdb37e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8234f2d69f3cf78be80ae5e4fdb37e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb8234f2d69f3cf78be80ae5e4fdb37e8::$classMap;

        }, null, ClassLoader::class);
    }
}

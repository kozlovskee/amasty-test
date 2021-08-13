<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4b154c41f31bc8c85c5d15d16a473ef
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kozlovsky\\Chess\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kozlovsky\\Chess\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4b154c41f31bc8c85c5d15d16a473ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4b154c41f31bc8c85c5d15d16a473ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4b154c41f31bc8c85c5d15d16a473ef::$classMap;

        }, null, ClassLoader::class);
    }
}
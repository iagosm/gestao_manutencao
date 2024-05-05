<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92b720befd632a8b68506955a6756389
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Libs',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92b720befd632a8b68506955a6756389::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92b720befd632a8b68506955a6756389::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92b720befd632a8b68506955a6756389::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit229ba39b7b1d635113b54cb57c330c95
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bluex\\DContainer\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bluex\\DContainer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit229ba39b7b1d635113b54cb57c330c95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit229ba39b7b1d635113b54cb57c330c95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit229ba39b7b1d635113b54cb57c330c95::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c37a5f9f8a1c49f407e3d6dc2a2ec30
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c37a5f9f8a1c49f407e3d6dc2a2ec30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c37a5f9f8a1c49f407e3d6dc2a2ec30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c37a5f9f8a1c49f407e3d6dc2a2ec30::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit982c5d1be1fc4351cc30d93e39015e90
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit982c5d1be1fc4351cc30d93e39015e90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit982c5d1be1fc4351cc30d93e39015e90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit982c5d1be1fc4351cc30d93e39015e90::$classMap;

        }, null, ClassLoader::class);
    }
}

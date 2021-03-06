<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f2b1b69b85da8a5637a10c1c344e787
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f2b1b69b85da8a5637a10c1c344e787::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f2b1b69b85da8a5637a10c1c344e787::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f2b1b69b85da8a5637a10c1c344e787::$classMap;

        }, null, ClassLoader::class);
    }
}

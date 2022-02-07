<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67b87ccf18462eea52ba5938510e7783
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit67b87ccf18462eea52ba5938510e7783::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67b87ccf18462eea52ba5938510e7783::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67b87ccf18462eea52ba5938510e7783::$classMap;

        }, null, ClassLoader::class);
    }
}

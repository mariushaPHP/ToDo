<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit436f46c9e9f234824422b12118d38679
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ToDo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ToDo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit436f46c9e9f234824422b12118d38679::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit436f46c9e9f234824422b12118d38679::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit436f46c9e9f234824422b12118d38679::$classMap;

        }, null, ClassLoader::class);
    }
}

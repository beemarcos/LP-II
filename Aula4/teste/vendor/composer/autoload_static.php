<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb25438304bb84dba7eb6153b5a521daa
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb25438304bb84dba7eb6153b5a521daa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb25438304bb84dba7eb6153b5a521daa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c4a63151d44f9d7aa7bcac1bc44d869
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c4a63151d44f9d7aa7bcac1bc44d869::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c4a63151d44f9d7aa7bcac1bc44d869::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
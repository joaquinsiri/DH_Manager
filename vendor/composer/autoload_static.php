<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7eef8ebb71de406b433ce39d5cd0d0b8
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DH_Manager\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DH_Manager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7eef8ebb71de406b433ce39d5cd0d0b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7eef8ebb71de406b433ce39d5cd0d0b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
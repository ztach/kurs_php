<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit851fdaa035c39f864be85e4ed9500b0e
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Ztach\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ztach\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit851fdaa035c39f864be85e4ed9500b0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit851fdaa035c39f864be85e4ed9500b0e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

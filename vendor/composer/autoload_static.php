<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41ddfa051b2de16ae39c35369abd7720
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41ddfa051b2de16ae39c35369abd7720::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41ddfa051b2de16ae39c35369abd7720::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
